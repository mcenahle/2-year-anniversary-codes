<?php
// 设置时区为北京时间
date_default_timezone_set('Asia/Shanghai');

// 活动开始时间（北京时间）
$startTime = strtotime('2026-02-10 08:00:00');

// 当前时间
$now = time();

// 如果还没到时间，就跳转
if ($now < $startTime) {
    // 禁止缓存
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    header('Expires: 0');

    // 临时跳转
    header('Location: too-early', true, 302);
    exit;
}

// 到了 2026-02-10 08:00 之后，下面正常执行页面内容
?>

<!doctype html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>博客 2 周年活动</title>
    <link href="https://www.mcenahle.org.cn/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://www.mcenahle.org.cn/bootstrap-3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="jquery-4.0.0.min.js"></script>
    <script src="https://www.mcenahle.org.cn/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <link href="https://www.mcenahle.org.cn/bootstrap-icons-1.13.1/bootstrap-icons.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
            color: #3b82f6;
        }

        a:hover,
        a:focus {
            text-decoration: none;
        }

        @font-face {
            font-family: 'PingFangSC-Regular';
            src: url('https://www.mcenahle.org.cn/resources/PingFangSC-Regular.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url('https://www.mcenahle.org.cn/resources/Inter-Regular.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url('https://www.mcenahle.org.cn/resources/Inter-Bold.woff2') format('woff2');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url('https://www.mcenahle.org.cn/resources/Inter-Italic.woff2') format('woff2');
            font-weight: 400;
            font-style: italic;
        }

        @font-face {
            font-family: 'Inter';
            src: url('https://www.mcenahle.org.cn/resources/Inter-BoldItalic.woff2') format('woff2');
            font-weight: 700;
            font-style: italic;
        }


        body,
        .jumbotron p {
            font-family: -apple-system,
            BlinkMacSystemFont,
            "SF Pro Text",
            "SF Pro Display",
            PingFangSC,
            Inter,
            "Helvetica Neue",
            Helvetica,
            Arial,
            sans-serif;
        }

        /* ========= 全局优化 ========= */
        body {
            background: #f5f7fb;
            color: #1f2937;
        }

        .navbar-inverse {
            background: linear-gradient(90deg, #1e3a8a, #2563eb);
            border: none;
        }

        .navbar-inverse .navbar-brand {
            color: #fff;
            font-weight: 600;
        }

        .navbar-inverse .navbar-brand:hover {
            color: #e0e7ff;
        }

        /* ========= Jumbotron ========= */
        .jumbotron {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            color: #fff;
            box-shadow: inset 0 -10px 30px rgba(0, 0, 0, 0.15);
        }

        .jumbotron h1 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .jumbotron p {
            opacity: 0.9;
            font-size: 16px;
        }

        /* ========= 卡片化列 ========= */
        .card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
            transition: all .2s ease;
            height: 100%;
        }

        .card:hover {
            /* transform: translateY(-4px); */
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            margin-top: 0;
            font-weight: 600;
            color: #1e3a8a;
        }

        /* ========= 按钮 ========= */
        .btn-primary-participate {
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            color: white;
        }

        .btn-primary-participate:hover,
        .btn-primary-participate:focus {
            background: linear-gradient(135deg, #1d4ed8, #4338ca);
            color: white;
        }

        /* ========= Footer ========= */
        footer {
            text-align: center;
            color: #6b7280;
            font-size: 13px;
        }

        /* ========= Modal ========= */
        .modal-content {
            border-radius: 12px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-title {
            font-weight: 600;
            color: #1e3a8a;
        }

        .modal-footer {
            border-top: none;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">博客 2 周年活动</a>
        </div>
    </div>
</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>提问 · 回答</h1>
        <p>2024-03-17 ~ 2026-03-17</p>
    </div>
</div>
<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <h3>活动介绍</h3>
                <p> 在博客 2 周年之际，我将举办一次特别的小活动。 </p>
                <p> 你可以： </p>
                <ul>
                    <li>向我提问（关于我、我的经历、想法）</li>
                    <li>向我的博客提问（建站、写作、变化）</li>
                    <li>以及其它问题，均可</li>
                </ul>
                <p> 我会从所有提问中，选择一部分， 在 <strong>博客 2 周年纪念日</strong> 当天，集中进行回答。 </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h3>时间说明</h3>
                <p><strong>提问时间：</strong>2026 年 2 月 10 日 08:00 – 2026 年 3 月 16 日 22:00</p>
                <p><strong>回答时间：</strong>博客 2 周年纪念日（2026 年 3 月 17 日）</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h3>如何参与</h3>
                <p> 你可以通过点击下面的按钮进行提问；当然，署名与否均可行。</p>
                <p>多次结果的称呼可以相同。所以，如果你想问多个问题，可以在“称呼”一栏中写相同的名字。</p>
                <button class="btn btn-primary-participate btn-lg btn-block" data-toggle="modal" data-target="#participateModal">
                    立即参与此活动...
                </button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h3>你的隐私</h3>
                <p>本网站在用户提交数据后，会收集用户的 IP 地址。本站承诺：不将这些 IP 地址用于任何目的，亦不会公开这些 IP
                    地址。</p>
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <p>&copy; 2026 blog.mcenahle.org.cn.</p>
    </footer>
</div> <!-- /container -->

<div class="modal fade" id="participateModal" tabindex="-1" role="dialog" aria-labelledby="participateModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post" action="submit.php">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="participateModalLabel">
                        参与 博客 2 周年活动
                    </h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">你的称呼（可选）</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="匿名也可以">
                    </div>

                    <div class="form-group">
                        <label for="question">你想问我的问题 *</label>
                        <textarea class="form-control" id="question" name="question"
                                  rows="5" required
                                  placeholder="可以关于我、博客，或任何你想问的"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> 关闭</button>
                    <button type="button" class="btn btn-primary" id="submitQuestion"><span class="glyphicon glyphicon-send"></span> 提交问题</button>
                </div>
            </form>


        </div>
    </div>
</div>
<script>
    $(function () {

        $('#submitQuestion').on('click', function () {

            var name = $('#name').val();
            var question = $('#question').val();

            if (!question.trim()) {
                alert('请填写你的问题');
                return;
            }

            $.ajax({
                url: 'submit.php',
                type: 'POST',
                data: {
                    name: name,
                    question: question
                },
                dataType: 'json',
                success: function (res) {
                    if (res.status === 'success') {
                        alert('提交成功！');

                        // 可选：关闭模态框
                        $('#participateModal').modal('hide');

                        // 可选：清空表单
                        $('#name').val('');
                        $('#question').val('');
                    } else {
                        alert('提交失败，请稍后再试');
                    }
                },
                error: function () {
                    alert('网络错误，请稍后再试');
                }
            });

        });

    });
</script>

</body>
</html>