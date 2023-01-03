<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Http\Controllers\Controller;

class ChatBotController extends Controller
{

    public function listenToReplies(Request $request)
    {
        $from = $request->input('From');
        $body = $request->input('Body');

        if ( strtolower($body) == "hola" || strtolower($body) == "hi" ) {
            $message = "Gracias por comunicarte con el *Club de Patinaje Cali es cali*\n\n";
            $message .= "Para brindarle una mejor atención por favor ingresa los siguientes datos:\n\n";
            $message .= "*Nombre:*\n";
            $message .= "*Teléfono:*\n";
            $message .= "*Correo electrónico:*\n";

            $this->sendWhatsAppMessage($message, $from);
        } else {
            switch (strtolower($body)) {
                case 1:
                case 2:
                case 3:
                    $message = "Seleccione la sede de su preferencia:\n\n";
                    $message .= "*A:* Sede Sur (Nueva Tequendama)\n";
                    $message .= "*B:* Sede Oriente (Unión de Vivienda Popular)\n";
                    $message .= "*C:* Otra\n";
                    $this->sendWhatsAppMessage($message, $from);

                    break;
                case 4:
                    $message = "Estamos remitiendo el caso al área comercial...\n\n";
                    $this->sendWhatsAppMessage($message, $from);
                    sleep(5);

                    $message = "Gracias por su espera, estamos ubicando un asesor disponible...\n\n";
                    $this->sendWhatsAppMessage($message, $from);
                    sleep(8);

                    $message = "Asesor asignado. En contados minutos se pondrá en contacto con usted nuestro representante de ventas: \n\n";
                    $message .= "*[ HUGO JAVIER JURADO CÓRDOBA ]*. Gracias.\n";
                    $this->sendWhatsAppMessage($message, $from);
                    break;
                case 5:
                    $message = "Por favor registre su PQRS en el siguiente enlace:\n\n";
                    $message .= "https://caliescali.com.co/contactanos/\n\n";
                    $message .= "Gracias, ha sido un placer atenderle\n";
                    $this->sendWhatsAppMessage($message, $from);
                    break;
                case "a":
                    $message = "Usted ha seleccionadao: SEDE TEQUENDAMA\n";
                    $this->sendWhatsAppMessage($message, $from);
                    break;
                case "b":
                    $message = "Usted ha seleccionadao: SEDE UNIÓN\n";
                    $this->sendWhatsAppMessage($message, $from);
                    break;
                case "c":
                    $message = "Ninguna sede seleccionada...\n";
                    //$this->sendWhatsAppMessage($message, $from);
                    //$this->sendSMSMessage("SMS Prueba ITaBot 20220220", "+573136938664");
                    $this->sendCallVoice("+573207974243");
                    break;
                default:
                    $message = "Por favor seleccione el servicio de su interés:\n\n";
                    $message .= "*1:* Clases personalizadas niños(as)\n";
                    $message .= "*2:* Clases personalizadas adulto\n";
                    $message .= "*3:* Mensualidad niños(as)\n";
                    $message .= "*4:* Asesoría ventas\n";
                    $message .= "*5:* PQRS\n";

                    $this->sendWhatsAppMessage($message, $from);
                    break;
            }
        }
        return;
    }

    /**
     * Sends a WhatsApp message  to user using
     * @param string $message Body of sms
     * @param string $recipient Number of recipient
     */
    public function sendWhatsAppMessage(string $message, string $recipient)
    {
        $twilio_whatsapp_number = getenv('TWILIO_WHATSAPP_NUMBER');
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");

        $client = new Client($account_sid, $auth_token);
        return $client->messages->create($recipient, array('from' => "whatsapp:$twilio_whatsapp_number", 'body' => $message));
    }


    /**
     * Sends a SMS message  to user using
     * @param string $message Body of sms
     * @param string $recipient Number of recipient
     */
    public function sendSMSMessage(string $message, string $recipient)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $messaging_service_id = getenv("TWILIO_MESSAGING_SERVICES");

        $client = new Client($account_sid, $auth_token);
        return $client->messages->create($recipient, array('messagingServiceSid' => $messaging_service_id, 'body' => $message));
    }


    /**
     * Sends a SMS message  to user using
     * @param string $message Body of sms
     * @param string $recipient Number of recipient
     */
    public function sendCallVoice(string $recipient)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_VOICE_NUMBER");

        $client = new Client($account_sid, $auth_token);
        return $client->account->calls->create($recipient, $twilio_number, array("url" => "http://demo.twilio.com/docs/voice.xml"));
    }

}
