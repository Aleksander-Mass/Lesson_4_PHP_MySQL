<?php
$experience = [
    [
        'company' => 'Company A',
        'position' => 'Position A',
        'duration' => 'January 2010 - December 2012',
        'responsibilities' => 'Responsibilities for Position A at Company A.'
    ],
    [
        'company' => 'Company B',
        'position' => 'Position B',
        'duration' => 'March 2013 - Present',
        'responsibilities' => 'Responsibilities for Position B at Company B.'
    ],
    // Добавьте дополнительные записи опыта работы по аналогии
];

$job = [
    'job_name' => ['GB', 'Бэттери Тим', 'Студия Лебедева'],
    'job_data' => ['2022-настоящее время', '2000-2006', '1999-2000'],
    'job_desc' => ['Много интересной работы', 'Разная работа', 'Очень много креативной работы']
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Опыт работы</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .w3-container {
            margin-bottom: 20px;
            padding: 16px;
        }
        .w3-card {
            background-color: white;
            border-radius: 4px;
            box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
        }
        .w3-margin-bottom {
            margin-bottom: 16px;
        }
        .w3-text-grey {
            color: #757575;
        }
        .w3-padding-16 {
            padding-top: 16px;
            padding-bottom: 16px;
        }
        .w3-xxlarge {
            font-size: 24px;
        }
        .w3-text-teal {
            color: #009688;
        }
        .w3-opacity {
            opacity: 0.6;
        }
        .fa-fw {
            width: 16px;
            text-align: center;
        }
        .fa-suitcase {
            font-size: 20px;
        }
        .fa-calendar {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Опыт работы</h1>
    <?php foreach ($experience as $index => $exp): ?>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
            <div class="w3-container">
                <h5 class="w3-opacity"><b><?php echo $exp['company']; ?></b></h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $exp['duration']; ?></h6>
                <p><?php echo $exp['responsibilities']; ?></p>
                <hr>
            </div>
            <div class="w3-container">
                <h5 class="w3-opacity"><b><?php echo isset($job['job_name'][$index]) ? $job['job_name'][$index] : ''; ?></b></h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo isset($job['job_data'][$index]) ? $job['job_data'][$index] : ''; ?></h6>
                <p><?php echo isset($job['job_desc'][$index]) ? $job['job_desc'][$index] : ''; ?></p>
                <hr>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
