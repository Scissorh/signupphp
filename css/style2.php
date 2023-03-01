<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Mulish&display=swap');
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Mulish', sans-serif;
}
header{
	width: 100%;
	height: 100vh;
	background-color: #1a52f9;
	background-image: linear-gradient(19deg,#1a52f9 0%,#B721FF 84%);
	position: relative;
}
header:before{
	content: "";
	width: 520px;
	height: 550px;
	position: absolute;
	left: 0;
	bottom: 0;
	background-image: url('images/bts2.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	border-radius: 50%;
}
nav{
	width: 100%;
	height: 15vh;
	display: flex;
	justify-content: space-around;
	align-items: center;
	position: absolute;
}
a{
color: white;
	text-decoration: none;
}
.logo a{
	font-size: 1.6rem;
	font-weight: bold;
	text-transform: capitalize;
}
.menu ul li{
	list-style: none;
	display: inline-block;
	padding: 0 15px;
}
.menu ul li a{
	text-transform: capitalize;

}
.active, ul li:hover{
border-top: 2px solid #5dade2;
border-bottom: 2px solid #5dade2;
}
.contact_btn a{
	background-color: #d465ef;
	padding: 12px 26px;
	font-style: 14px;
	font-weight: 500;
	border: 1px solid transparent;
	text-transform: capitalize;
}
.contact_btn a:hover{
	background: linear-gradient(to bottom,#615cfd 0%,#d465ef 100%);
}
.center_content{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.center_content h1,h2{
color: #fff;
text-transform:capitalize ;
}
.center_content h1{
	font-size: 55px;
	font-weight: 600;
	margin-bottom: 10px;
}
.center_content h2{
	font-size: 20px;
	font-weight: 350;
}
.center_content h2:before{
	content: "";
	width: 80px;
	height: auto;
	border: 2px solid #fff;
	position: absolute;
	left: 0;
	bottom: 0;
	margin-bottom: 10;

}

/* -----------------font awesome style ----------------------  */
.social_contact{
	width: 100px;
	height: auto;
	right: 0;
	top: 40%;
	position: absolute;
}
.fa-icons{
width: 40px;
height: 40px;
border-radius: 50%;
background: linear-gradient(to bottom,#615cfd 0%,#d465ef 100%);
display: flex;
justify-content: center;
align-items: center;
}
.fa-icons:nth-child(even){
	margin: 20px 0;
}
.fa-icons:hover{
	background:linear-gradient(to bottom,#d465ef 0%,#615cfd 100%); ;
}
	</style>
</head>
<body>

</body>
</html>