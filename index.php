<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<ul class="list-unstyled">


    <?php
            $array = [
                1=>[
                  'image'=>'https://fakeimg.pl/250x100/',
                    'title'=>'List-based media object',
                    'content'=>'Cras sit amet nibh libero, in gravida nulla.'
                ],
                2=>[
                    'image'=>'https://fakeimg.pl/250x100/',
                    'title'=>'List-based media object',
                    'content'=>'Cras sit amet nibh libero, in gravida nulla.'
                    ],
                3=>[
                    'image'=>'https://fakeimg.pl/250x100/',
                    'title'=>'List-based media object',
                    'content'=>'Cras sit amet nibh libero, in gravida nulla.'
                ]
            ];
    foreach($array as $item){
    ?>
    <li class="media my-4">
        <img class="mr-3" src="<?= $item['image']?>" alt="Generic placeholder image">
        <div class="media-body">
            <h5 class="mt-0 mb-1"><?= $item['title']?></h5>
            <?= $item['content']?>
        </div>
    </li>
    <?php
    }
    ?>
</ul>
</body>
</html>