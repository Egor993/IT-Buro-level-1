<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>IT-Buro-level-1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include ('ArrayWorker.php');
        $worker = new ArrayWorker();
    	$worker->dump();
    ?>
    <div class="clouds">
        <header class="menu">     
            <nav>   
                <ul>
                    <li><a href="#">Junior</a>  |</li>
                    <li><a href="#">Middle</a>  |</li>
                    <li><a href="#">Senior</a></li>
                </ul>
            </nav>
        </header>
            <div class="caption">
                <p>Тестовое задание для Junior веб-разработчика</p>
            </div>
            <div class="warning">
                <p>Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта.</p> 
                <p>Ознакомиться со списком актуальных вакансий можно по ссылке: <a href="https://voronezh.hh.ru/employer/1132736">https://voronezh.hh.ru/employer/1132736</a></p>
            </div>
            <div class="description">
                <div class="left-description">
                    <p>Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий высокий спрос, позволяет нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс.</p>
                </div>
                <div class="right-description">
                    <p>У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса =)</p>	
                </div>
            </div>
            <div class="attention">
                <div class="logo">
                    <img src="img/BX-logo.png">
                </div>
                <div class="attention-description">
                    <p>Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.</p>	
                </div>
            </div>
            
            <div class="footer">
                <hr>
                <p class='postscript'>© 2009-2019 IT-Buro</p>
            </div>
        </div>
</body>
<script src="js/script.js"></script>
</html>
