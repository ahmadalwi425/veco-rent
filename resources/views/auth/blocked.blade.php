<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #back {
            position: absolute;
            bottom: 30pt;
            right: 30pt;
            /* z-index: 10; */
            transition: all 0.6s;
            text-decoration: none;
            color: white;
            font-size: 15pt;
            font-family: Arial, Helvetica, sans-serif
            /* cursor: url(cursors/select.PNG), pointer; */
	    }
        body{
            height: 100%;
            background-image: url('{{ asset('nothaveaccess-02.jpg')}}');
            /* Center and scale the image nicely */
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover;    
    }
    </style>
</head>
<body>
    <a href="{{ url()->previous() }}" id="back" class="btn btn-default">< Kembali halaman sebelumnya</a>
</body>
</html>

<body>
    
</body>