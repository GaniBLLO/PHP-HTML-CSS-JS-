<?php
/*Вывод сообщения на страницу*/
    echo "Hello World";

/* Чтение/запись данных файла
 * https://www.php.net/manual/ru/function.fopen.php
 * r - Открывает файл только для чтения; помещает указатель в начало файла.
 * w - Открывает файл только для записи.
 * a - Открывает файл только для записи; помещает указатель в конец файла.
 * fwrite - записывает данные в отктый файл
 * fclose - закрывает файл для чтения/записи данных. Для дальнейшей работы 
 * следует открыть файл заново и дополнять его данными*/
    $my_file = fopen("Text.txt", "w");
    fwrite($my_file, "Hello");
    fclose($my_file);

    $my_file = fopen("Text.txt", "a");
    fwrite($my_file, " World!");
    fclose($my_file);

/* Заполнение массива + чтение
 * Запись данных в файл*/
    $my_arr = array("Добавил массив ", "в", " текстовый файл");
    $my_file = fopen("Text.txt", "a");
    foreach($my_arr as $arr_name){
        fwrite($my_file, $arr_name);
        echo "\n";
    }
    fclose($my_file);
    
/* Чтение данных из файла */
    $read_txt = file("Text.txt");
    foreach($read_txt as $read){
        echo $read;
    }

/* ООП 
 * __construct() - Конструктор
 * __destruct() - Деструктор*/
class my_class{
    public $some_var;
    public function __construct(){
        echo "Конструктор\n";
        $this->some_var = 5;
    }
    public function __destruct(){
        echo "Деструктор\n";
        echo $this->some_var;
    }
}
?>