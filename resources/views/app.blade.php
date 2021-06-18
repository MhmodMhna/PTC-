<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<table class="table table-hover">

    <thead>
    <tr>
        <th>رقم</th>
        <th>رقم التسجيل</th>
        <th>اسم رب الأسرة</th>
        <th>مقدم الطلب</th>
        <th>مركز التوزيع</th>
        <th>رقم الدفتر</th>
        <th>رقم الصفحة</th>
        <th>عدد أفراد الأسرة</th>
        <th>نوع الكابونة</th>
        <th>تاريخ التوزيع</th>
        <th>ملاحظات</th>
        <th>حذف او تعديل</th>

    </tr>
    </thead>
    <tbody>


    @foreach ($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td class="" >{{$task ->stud_name}}</td>
            <td class="" >{{$task ->stud_id}}</td>
            <td class="" >{{$task ->acadmic_id}}</td>
            <td class="" >{{$task ->specialty}}</td>
            <td class="" >{{$task ->semester}}</td>
            <td class="" >{{$task ->semester_year}}</td>
            <td class="" >{{$task ->fees_sem}}</td>
            <td class="" >{{$task ->acc_fee}}</td>
            <td class="" >{{$task ->gender}}</td>
            <td class="" >{{$task ->social_stud}}</td>
            {{--        <td>--}}
            {{--            <a href="http://localhost/users/index.php/user_c/user_id/<?php echo $row->id; ?>">--}}
            {{--                <span class="glyphicon glyphicon-pencil">  </span>--}}
            {{--            </a>--}}
            {{--            <a href="http://localhost/users/index.php/user_c/del/<?php echo $row->id; ?>" onclick="return confirm('هل انت متاكد من الحذف')">--}}
            {{--				<span class="glyphicon glyphicon-trash">--}}
            {{--            </a>--}}
            {{--        </td>--}}


            <td >
                <form action="{{url('edit/'.$task->id)}}" method="get">
                    @csrf
{{--                    @method('put')--}}
                    <button>
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                </form>
            </td>
            <td >
                <form action="{{url('delete/'.$task->id)}}" method="post">
{{--                    @csrf--}}
{{--                    @method('put')--}}
                    <button>
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </form>
            </td>

    @endforeach
    </tbody>
</table>
