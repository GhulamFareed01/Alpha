<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('adminAssets/styles.css')}}">
    <title>Admin dashboard</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1  style="color:black">{{Auth::user()->name}}</h1>
        </div>
        <div class="brand-name">
          <h3 style="color:black">{{Auth::user()->email}}</h3>
        </div>
        <ul>
            <li><img src="{{asset('adminAssets/dashboard (2).png')}}" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="{{asset('adminAssets/reading-book (1).png')}}" alt="">&nbsp;<span>Students</span> </li>
            <li><img src="{{asset('adminAssets/teacher2.png')}}" alt="">&nbsp;<span>Teachers</span> </li>
            <li><img src="{{asset('adminAssets/school.png')}}" alt="">&nbsp;<span>Schools</span> </li>
            <li><img src="{{asset('adminAssets/payment.png')}}" alt="">&nbsp;<span>Income</span> </li>
            <li><img src="{{asset('adminAssets/help-web-button.png')}}" alt="">&nbsp; <span>Help</span></li>
            <li><img src="{{asset('adminAssets/settings.png')}}" alt="">&nbsp;<span>Settings</span> </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                    <br>
                    
            </li>
            <li> <a href="/" style="color:red" style="bg-color:red"><span>Website</span></a></li>
           
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="{{asset('adminAssets/search.png')}}" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                
                    <img src="{{asset('adminAssets/notifications.png')}}" alt="">
                    <div class="img-case">
                        <img src="{{asset('adminAssets/user.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="{{asset('adminAssets/students.png')}}" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Teachers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="{{asset('adminAssets/teachers.png')}}" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Schools</h3>
                    </div>
                    <div class="icon-case">
                        <img src="{{asset('adminAssets/schools.png')}}" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="{{asset('adminAssets/income.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Categories Table</h2>
                        <button class="btn" > Add Category</button>
                    </div>
                    <table>
                        <tr>
                            <th>S.NO</th>
                            <th>Name</th>
                            <th>Description</th>
                             <th>Actions</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>