<?php

namespace App\Utilities;

use App\Models\Parameter;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Exception;
use Illuminate\Support\Facades\DB;
use Psy\Util\Json;

class Devtools {

    /** Herramientas de desarrollo IT Bests */

    public static $csbYes = 'Y';
    public static $csbNot = 'N';
    public static $csbParameter = 'Parámetro';
    public static $csbMessage = 'Mensaje';

    public static $cnuErrorGeneral = -99;
    public static $cnuErrDataNull = 1; //El dato ingresado no puede ser nulo
    public static $cnuErrMessWithParams = 2; //El mensaje indicado [%s1] no recibe parámetros
    public static $cnuErrDataNotExists = 3; //El %s1 ingresado [%s2] no existe configurado en el sistema


    private static $csbErrParam = 'Error obteniendo parámetro [%s1], no se encuentra registrado';
    private static $csbErrMessage = 'Error obteniendo mensaje, el código de mensaje [%s1] no existe';

    private static $message_parameter = 1;
    private static $id_message_title = 4;
    private static $id_message_success = 5;
    private static $id_message_fail = 6;


    /** Valida dato null */
    static function evaluarDatoNulo($data)
    {
        try
        {
            if(is_null($data))
            {
                throw new Exception(self::getMessage(self::$cnuErrDataNull));
            }
            return true;
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }

    /** Obtiene valor del parámetro consultado */
    static function getParameterValue($name_)
    {
        try
        {
            self::evaluarDatoNulo($name_);

            $parameter = Parameter::where('name_', $name_)->value('value');
            if(empty($parameter))
            {
                throw new Exception(self::getMessage(self::$cnuErrDataNotExists, self::$csbParameter."|".$name_));
            }
            return $parameter;
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }

    /** Consulta descripción del código de mensaje consultado */
    static function getMessage($id, $params = null)
    {
        try{
            self::evaluarDatoNulo($id);

            $message = Message::find($id);
            $message = $message->message;

            if(empty($message))
            {
                throw new Exception(self::getMessage(self::$cnuErrDataNotExists, self::$csbMessage."|".$id));
            }

            switch ($message->params)
            {
                case self::$csbYes:
                    if (!is_null($params))
                    {
                        $i = 1;
                        $arrayParams = explode("|", $params);
                        foreach($arrayParams as $valor)
                        {
                            $message = str_replace("%s".$i, $valor, $message);
                            $i++;
                        }
                    }
                    break;
                case self::$csbNot:
                    if (!is_null($params))
                    {
                        throw new Exception(self::getMessage(self::$cnuErrMessWithParams, $params));
                    }
                    break;
                default: return $message;
                    break;
            }

            return $message;
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }

    }

    /** Obtiene el registro de colección para el código de mensaje consultado, result[id, message, cause, solution] */
    static function getMessageCollect($id, $params = null)
    {
        self::evaluarDatoNulo($id);

        $message = Message::find($id);
        if(empty($message))
        {
            throw new Exception(self::getMessage(self::$cnuErrDataNotExists, self::$csbMessage."|".$id));
        }

        switch ($message->params)
        {
            case self::$csbYes:
                if (!is_null($params))
                {
                    $i = 1;
                    $arrayParams = explode("|", $params);
                    foreach($arrayParams as $valor)
                    {
                        $message = str_replace("%s".$i, $valor, $message);
                        $i++;
                    }
                }
                break;
            case self::$csbNot:
                if (!is_null($params))
                {
                    throw new Exception(self::getMessage(self::$cnuErrMessWithParams, $params));
                }
                break;
        }

        $result = [
            'id' => $message->id,
            'message' => $message,
            'cause' => $message->cause,
            'solution' => $message->solution,
        ];

        return $result;
    }

    static function setDataAudit()
    {
        $user_id = Auth::id();

        if(is_null($user_id) || empty($user_id))
            $user_id = Devtools::getParameterValue('DEFAULT_USER');

        $data = array(
            array('USER_ID', $user_id),
            array('TERMINAL', Devtools::getTerminal())
        );

        for($i=0; $i<count($data); $i++)
        {
            $token = $data[$i][0];
            $value = $data[$i][1];
            $sql = "select set_session(?,?)";
            DB::select($sql, array($token, $value));
        }
    }

    static function getTerminal()
    {
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"),"unknown"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
            $ip = getenv("REMOTE_ADDR");
        else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
            $ip = $_SERVER['REMOTE_ADDR'];
        else
            $ip = "IP desconocida";

        return($ip);
    }

    private static function setMessageSuccess($dataJson, $id)
    {
        $result = json_decode($dataJson, true);
        $result['message_title'] = Devtools::getMessage(self::$id_message_title);
        $result['message_process'] = Devtools::getMessage($id);
        return json_encode($result);
    }

    private static function setMessageErrors($dataJson, $id)
    {
        $result['errors'] = $dataJson;
        $result['message_title'] = Devtools::getMessage(self::$id_message_title);
        $result['message_process'] = Devtools::getMessage($id);
        return $result;
    }

    static function beginTransaction()
    {
        DB::beginTransaction();
    }

    static function commit()
    {
        DB::commit();
    }

    static function rollback()
    {
        DB::rollBack();
    }

    /*
    static function setMessageResponse($dataJson = null, $type_mess, $id_message = null)
    {
        if(is_null($dataJson))
            $dataJson = json_encode(array('dummy' => null));

        if($type_mess == 1)
        {
            if (is_null($id_message)) $id_message = self::$id_message_success;
            return Devtools::setMessageSuccess($dataJson, $id_message, $id_message);
        }
        else if($type_mess == 2)
        {
            if (is_null($id_message)) $id_message = self::$id_message_fail;
            return Devtools::setMessageErrors($dataJson, $id_message, $id_message);
        }
    }
    */

}
