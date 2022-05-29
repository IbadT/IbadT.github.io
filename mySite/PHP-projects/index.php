<?php
    // require
    // require_once // вкл файл только один раз и попытка повторного подкл файла будет игнорирована
    // isset()
    // empty()
    // gettype()
    // unset()
    // clone
    // define(name, value) make CONST 3 параметр (true/false) будет ли константа регистрозависимой
    // defined(name)
        // echo defined(name)
        // if(defined(name)){
        //     echo 'const have';
        // }else{
        //     echo 'const havent';
        // };
    // ОСНОВНЫЕ КОНСТАНТЫ, КОТОРЫЕ УЖЕ ПРЕДОПРЕДЕЛЕНЫ(
        // __LINE__   // какая текущая строка в файлу
        // __FILE__   // полный путь и имя текущего файла
        // __FUNCTION__   // имя функции
        // __CLASS__   // имя класса
        // __METHOD__   // имя метода 
        // __DIR__   // текущий каталог директории
        // PHP_VERSION   // версия интерпритатора php
        // PHP_OS   // Операционная система, под которую собирался PHP
        // PHP_EOL   // символ конца строки (\n || \r\n)
    // )
    // echo 'Line'.__LINE__;
    // echo '<br>';
    // echo 'File'.__FILE__;
    // echo '<br>';
    // echo 'Function'.__FUNCTION__;
    // echo '<br>';
    // echo 'PHP version'.PHP_VERSION;
    // echo '<br>';
    // echo 'Class'.__CLASS__;
    // echo '<br>';
    // echo 'Method'.__METHOD__;
    // echo '<br>';
    // echo 'Dir'.__DIR__;
    // echo '<br>';
    // echo 'OS version'.PHP_OS;
    // echo '<br>';
    // echo 'PHP EOL'.PHP_EOL;

    // require_once "C:/Users/Acer/Desktop/it/PHP-projects/index.php"; // Абсолютный путь
    // require_once "... ./index.php"; // Относительный путь
    // require_once __DIR__."./index.php";
    
    // intval()
    // echo (int)(5/3);

    // file_get_contents()
    // exit()
    // goto
        // $num = 10;
        // begin:
        // $num++;
        // echo "$num<br>";
        // if ($num > 20) goto finish;
        // goto begin;
        // finish:
        // echo 'end';

    // print_r()
        // $arr = array('One', 'Two', 'Trhee');
        // echo '<pre>';
        // print_r($arr);
        // echo '</pre>';

    // count($arr)
    // echo $arr[count($arr)-1]; //выводит последний элемент массива
    // $arr = [index => value]; присвоение индекса
    // $arr2 = ['One', 'Two', 'Trhee', 10 => 'Four'];
    // echo $arr2[10]; //Four


    // ассоциативные массивы
    // $arr = ['One' => 'First', 'age' => 32];

    //многомерные массивы
    // $people = [
    //     'Ivan' => ['age' => 12, 'weight' => 43],
    //     'Oleg' => ['age' => 43, 'weight' => 22],
    //     'Nike' => ['age' => 10, 'weight' => 12]
    // ];
    // echo '<pre>';
    // print_r($people);
    // echo '</pre>';

    // echo $people['Ivan']['age'];


    //интерполяция элемента массива в строку
    // $people = [
    //     'Ivan' => ['age' => 12, 'weight' => 43],
    //     'Oleg' => ['age' => 43, 'weight' => 22],
    //     'Nike' => ['age' => 10, 'weight' => 12]
    // ];
    // $arr[0] = 1;
    // $arr2['time'] = 10;
    // echo "Tomorrow $arr[0]<br>";
    // echo  "Tommorrow $arr2[time]<br>";
    // echo "Oleg have {$people['Oleg']['age']} age";


    // list(varname)
    // $arr = [1, 2, 3];
    // list($one, $two, $three) = $arr;


    // $arr = [1, 2, 3, 4, 5];
    // $users = [
    //     'name' => 'John',
    //     'age' => 23
    // ];
    // // foreach ($variable as $key => $value){} // разбери массив как ключ => значение
    // foreach ($users as $key => $value){
    //     echo $key." ".$value."<br>";
    // };
    // foreach ($users as $value){
    //     echo $value."<br>";
    // };
    // for ($i = 0; $i < count($arr); $i++) {
    //     echo $arr[$i],"<br>";
    // };






    $alpha = 'c';
    if ($alpha == 'b'):
        ?>
    <h1>Simple HTML</h1>
    <?php
    elseif ($alpha == 'a'):
        ?>
    <h2>Simple HTML H2</h2>
    <?php
    else: ?>
    <h3>Simple HTML H3</h3>
    <?php
    endif;










    //Функции и работы с массивами
     
    //слияние массивов
    // $arr1=['my','text'];
    // $arr2=['our','some'];
    // $sum = $arr1+$arr2; //усли в массивах одинаковые индексы, то при слиянии попадают в переменную значения, которые слева(1 массива)
    // //my, text
    // echo '<pre>';
    // print_r($sum);
    // echo '<pre>';

    // //OROROROROROROROOR

    // $arr3=['my','text'];
    // $arr4=[2=>'our',3=>'some'];
    // $sum2 = $arr3+$arr4;
    // //my, text, our, some
    // echo '<pre>';
    // print_r($sum2);
    // echo '<pre>';

    // //OROROROROROROROROR

    // $arr5=['my','text'];
    // $arr6=['our','some','newElement'];
    // $sum3 = $arr5+$arr6;
    // //my, text, newElement
    // echo '<pre>';
    // print_r($sum3);
    // echo '<pre>';




    // array_merge(array1,array2...) //делает слияние двух массивов !!!!!!!!!!!!!!!!!!
    // $arr1=['my','text'];
    // $arr2=['our','some'];
    // $sum = array_merge($arr1, $arr2);
    // print_r($sum)



    //сравнение массивов
    //=== при строгом равенстве, если длинна массивов равно, но хотябы один элемент отличается по типу данных с другим, то эл-ты будут не равны


    // существование массива
    //isset(element) // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // $arr = [1,2,3,4];
    // for($i=0;$i<=6;$i++){
    //     if(isset($arr[$i])){
    //         echo $arr[$i];
    //     }else{
    //         echo 'empty';
    //     }
    // }

    //is_array(array) //проверяет, является ли переменная массивом !!!!!!!!!!!!!!!!!!!!!!!!

    //in_array(что мы хотим найти(element), массив, true(===)||false(==)) (==)  //проверяет значение массива на совпадение !!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        //существует ли элемент в массиве

    
    // array_key_exists(key, array, true||false)


    //удаление эл-ов массива
    //unset() !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!111

    // $a = [1,2,3];
    // unset($a[1]); //удаляет элемент с индексом 1
    // print_r($a); //выводится массив
    // unset($a);
    // print_r($a); //массив удален




    //Глобальные и статические переменные 
    // function getSum(){
    //     global $a; //указываем глобальную переменную
    //     $a = 2;
    //     return $a;
    // }

    // function getSum2(){
    //     $a = 0;
    //     return ++$a;
    // }
    // echo getSum2(); //1
    // echo getSum2(); //1
    // echo getSum2(); //1
    // //OROROROROROROROROROROR
    // function getSum3(){
    //     static $a = 0;
    //     return ++$a;
    // }
    // echo getSum3(); //1
    // echo getSum3(); //2
    // echo getSum3(); //3
    




    //РЕКУРСИВНЫЕ ФУНКЦИИ
    // function rec($num){
    //     //если параметр $num >= 10, продолжаем рекурсию
    //     if($num >= 10){
    //         //уменьшаем значение параметра и выводим его
    //         echo $num--.'<br/>';
    //         //производим рекурсивные вызов функции
    //         rec($num);
    //     }else{
    //         return;
    //     }
    // }
    // rec(15); // 15,14,13,12,11,10
    
    // function factorial($num){
    //     if($num<=1){
    //         return 1;
    //     }else{
    //         return $num * factorial($num-1);
    //     }
    // }
    // echo factorial(5);

    // function test($num){
    //     if($num > 100){
    //         echo $num."<br/>";
    //         test($num-5); 
    //     }else{
    //         return;
    //     }
    // }
    // echo test(120);







    //вложенные функции
    // $arr = [1,2,3,4,5];
    // function box($arr){
    //     function inn(){
    //         echo 'test';
    //     };
    //     inn();
    //     print_r($arr);
    // };
    // box($arr);



    //динамические функции
    // function hello(){
    //     echo 'test';
    // }
    // $res = hello();

    // function hello2(){
    //     return 'hello';
    // }
    // $r = hello2();
    // echo $r;



    //анонимные функции
    // $arr = [1,2,3,4,5];
    // $some = function(...$arr){
    //     foreach($arr as $val){
    //         echo $val.'<br/>';
    //     };
    // };
    // $some(12,3,12,55,43,2);





    //замыкания в php применяются только к анонимным функциям !!!!!!!!!!!!!!!!!!
    // $someText = 'текст до начала загрузки';
    // $test = function( array $some) use ($someText){
    //     if(isset($some) && count($some)>0){ // является ли $some массивом И его количество эл-ов больше 0
    //         echo $someText;
    //         foreach($some as $val){
    //             echo '<br/>'.$val.'<br/>';
    //         }
    //     }
    // };
    // $a[] = 'текст после загрузки';
    // // $test($a);
    // $a = [1,2,3,4,5];
    // // $test($a);

    // //изменение окружения

    // //замыкание - это ф-я которая запоминает состояние окружения в момент своего создания
    // // те нельзя изменить его состояние если сделать так↓
    // $someText = 'измененный текст <br/>';
    // $test($a);

 








    //UTF-8 и mbstring
    
    // $str = 'html css';
    // echo "\u{040}"; //выводит специальные символы в utf-8

    // //одинаковые конструкции
    // echo "{$str[2]}";
    // echo $str[2];

    // mbstring;  





    

    // $str = 'somestr';
    // echo strlen($str); // выводит количество символов в строке


    // поиск внутри строки
    // substr(string,start,сколько символов мы должны вернуть(необяз-й));

    // echo substr($str, 2); //mestr
    // echo substr($str, 2,2); //me

    // strpos(haystack(str),needle(то, что нужно найти)); // Учитывает регистр
    // echo strpos($str, 't') //5

    // echo substr($str, strpos($str,'t')); //tr




    // замена текста внутри строки
    // $str = ' PHP - some Text ';
    // str_replace(search,replace,subject)
    // $res = str_replace('-', '===', $str);
    // echo $res; //PHP === some Text


    // trim(str) //удаляет пробелы и переносы
    // echo trim($str);







    // работа с HTML в PHP
    // $str = "<p>Hello<strong> PHP</strong></p>";
    // echo $str;

    // htmlspecialchars(string) // отвечает за отчистку форму инф-ии, которая приходит к нам на сервер
    // echo htmlspecialchars($_POST['name']) //при вводе в текстовое поле, пользователь может указать зловредный скрипт и потом просто его выводит в бузу в виде строки, а без этого метода скрипт бы отработал








    // explode(delimiter, string); //разбить строку на массив (split(JavaScript))
    // $str = 'Name, LastName, Age'; 
    // $res = explode(',', $str);
    // echo "<pre>";
    // print_r($res);
    // echo "</pre>";               //Array([0] => Name[1] =>  LastName[2] =>  Age)

    // implode(glue, pieces) //из массива в строку
    // $newStr = ['one', 'two', 'three'];
    // $res = implode('-',$newStr);
    // echo $res; //one-two-three




    // сериализация массивов и объектов
    // serialize(value); // принимает массив или объект возвращая его в виде закодированной строки
    // unserialize(str); // принимает закодированную строку и возвращает массив или объект

    // $num = [11,234,123,44,1,4,55];
    // $str = serialize($num);
    // $array = unserialize($str);
    // echo $str.'<br/>';
    // echo "<pre>";
    // print_r($array);
    // echo "</pre>";
    //ORORORORORO
    // var_dump($array);







    // JSON
    // json_encode($arr, ); // преобразует переменную в json 
    // json_decode(json); // 

    // $arr = [
    //     'one'=>'Степан',
    //     'two'=>'second',
    //     'learn'=>['HTML', 'CSS', 'PHP']
    // ];
    // echo json_encode($arr, JSON_UNESCAPED_UNICODE); //JSON_UNESCAPED_UNICODE - для того, чтобы русские буквы не кодировались

    // $jsonPHP = '{"people":"Степан", "age":"20"}';
    // $res = json_decode($jsonPHP, true); //true для работы с многомерными массивами
    // echo '<pre>';
    // print_r($res);
    // echo '</pre>';





    // GET
    // $_GET['name']
    // http://localhost:4000/      - адрес нашего сервера
    
    
    // http://localhost:4000/?name=andrey    - если мы допишем в адресной строке эту строчку, то получим (andrey), тк сработает GET запрос
    // echo $_GET['name'] // andrey

    // http://localhost:4000/?name=andrey&age=7    - при помощи & мы можем добавлять данные для GET запроса
    // echo $_GET['name']; // andrey
    // echo $_GET['age']; //7
    //OROROROROR
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';



    // urlencode(str); //кодируем строку для безопасной передачи через url
    
    // http://localhost:4000/?name=Андрей Андрей
    // echo "<a href='test.php?text=".urlencode('Привет ПХП')."'>Ссылка</a>"; // теперь наши кирилические буквы мы закодировали



    // parse_url(url); //получаем данные об этом url адресе (для ПАРСИНГА) ЛОГиРОВАНИЕ!!!!!!!!!!!!!!!!!!
    // $url = "https://user:admin@site.come/page/index.php?id=12&value=val#author";
    // echo '<pre>';
    // print_r(parse_url($url)); //Array([scheme] => https[host] => site.come[user] => user[pass] => admin[path] => /page/index.php[query] => id=12&value=val[fragment] => author)
    // echo '</pre>';





    










?>