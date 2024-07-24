<?

function cutText(string $text, int $limit, string $continue = '...'): string
{
    $cleanText = trim(strip_tags($text));  //Tira espaço e limpa tags
    if(mb_strlen($cleanText <= $limit)){
        return $cleanText;
    }

    /**
     * Extrai um texto e retira de 0 a $limit.
     * Depois, nesse texto retira de 0 até o caractere antes do último espaço. 
     */ 
    $cutText = mb_substr($cleanText, 0, mb_strrpos(mb_substr($cleanText, 0, $limit), ' '));

    return $cutText . $continue;
}
