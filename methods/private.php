<?php

class Priv
{
    public function welcome($name, $id)
    {
        $text       =   "BIENVENIDO/A {$name} \n\n Usa /help para ver los comandos disponibles";
        $text       =   urlencode($text);
        $callback   =   "/sendMessage?chat_id={$id}&text={$text}";
        return($callback);
    }

}

?>