# WebMiniTask
simple data req/res over web connection with PHP

 Developer: Saejong Jang
 
 Environment: 
 
 #Editor => VSCode
 #Server => Apache(localhost running on Xampp) 
 #Language => PHP

 Sources used:
 
 #php.net manual for methods => file_get_contents and json_decode.
 #w3schools and stackoverflow => applying php array and json parsing.

 List the HTTP requests and responses:
 file_get_contents(Http GET request only) => fetch the URL(http://gmc.lingotek.com/language) and return response the contents as a JSON string.
 Needed json_decode method to return the value encoded in json in appropriate PHP type.
 response => Key = String(i.e., "ko", "en"), Value = Array(i.e., "language")
 $status_code[0] => shows http connection status 200:success, 404:not found, 400: bad request, 403:forbidden, 504: service unavilable.

output:
 
 200
 
Key=ar, Value=Arabic

Key=ca, Value=Catalan

Key=cs, Value=Czech

Key=da, Value=Danish

Key=de, Value=German

Key=el, Value=Greek

Key=en, Value=English

Key=es, Value=Spanish

Key=fi, Value=Finnish

Key=fr, Value=French

Key=hu, Value=Hungarian

Key=id, Value=Indonesian

Key=it, Value=Italian

Key=iw, Value=Hebrew

Key=ja, Value=Japanese

Key=ko, Value=Korean

Key=lt, Value=Malay

Key=nl, Value=Dutch

Key=no, Value=Persian

Key=pl, Value=Polish

Key=pt, Value=Portuguese

Key=ru, Value=Russian

Key=sv, Value=Swedish

Key=th, Value=Thai

Key=tr, Value=Turkish

Key=zh, Value=Chinese
 
 Spoke English for about 5 years
 
 My native language is Korean
 
 Currently working on my Chinese about 1 year.
 
