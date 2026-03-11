<?php
header('Content-Type: application/json; charset=utf-8');

// 简单校验
if (empty($_POST['question'])) {
    echo json_encode(['status' => 'error', 'msg' => '问题不能为空']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$question = trim($_POST['question']);

$data = [
    'name'      => $name === '' ? '匿名' : $name,
    'question'  => $question,
    'time'      => date('Y-m-d H:i:s'),
    'ip'        => $_SERVER['REMOTE_ADDR']
];

$file = __DIR__ . '/results.json';

// 如果文件不存在，初始化为空数组
if (!file_exists($file)) {
    file_put_contents($file, json_encode([], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

// 读取原数据
$json = file_get_contents($file);
$array = json_decode($json, true);

if (!is_array($array)) {
    $array = [];
}

// 追加新数据
$array[] = $data;

// 写回文件
file_put_contents(
    $file,
    json_encode($array, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
);

// 返回结果
echo json_encode(['status' => 'success']);
