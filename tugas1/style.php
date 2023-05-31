<?php
header("Content-type: text/css");

$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

html,
body {
}

header {
	position: fixed;
	width: 100%;
	height: var(--heading-height);
}

h2 {
	text-align: center;
	font-size: 42;
	font-weight: 700;
	letter-spacing: .01em;
	text-shadow: .022em .022em .022em #111;
	color: #fff;
}

h1 {
	text-align: center;
	font-size: 32;
	font-weight: 700;
	letter-spacing: .01em;
	padding: 2rem;
	text-shadow: .022em .022em .022em #111;
	color: #fff;
}

label {
  color: #fff;
  font-weight: bold;
  display: block;
}

p {
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.2;
	color: #fff;
}

button {
	margin: 0 auto;
	display: inline-block;
    outline: 0;
    border: 0;
    cursor: pointer;
    font-weight: 600;
    color: rgb(72, 76, 122);
    font-size: 14px;
    height: 38px;
    padding: 8px 24px;
    border-radius: 50px;
    background-image: linear-gradient(180deg,#fff,#f5f5fa);
    box-shadow: 0 4px 11px 0 rgb(37 44 97 / 15%), 0 1px 3px 0 rgb(93 100 148 / 20%);
    transition: all .2s ease-out;
}

button:hover{
    box-shadow: 0 8px 22px 0 rgb(37 44 97 / 15%), 0 4px 6px 0 rgb(93 100 148 / 20%);
}

#guest_header {
	margin-top: 60px;
}

#submit {
	margin: 0 auto;
	display: inline-block;
    outline: 0;
    border: 0;
    cursor: pointer;
    font-weight: 600;
    color: rgb(72, 76, 122);
    font-size: 14px;
    height: 38px;
    padding: 8px 24px;
    border-radius: 50px;
    background-image: linear-gradient(180deg,#fff,#f5f5fa);
    box-shadow: 0 4px 11px 0 rgb(37 44 97 / 15%), 0 1px 3px 0 rgb(93 100 148 / 20%);
    transition: all .2s ease-out;
}

#submit:hover{
    box-shadow: 0 8px 22px 0 rgb(37 44 97 / 15%), 0 4px 6px 0 rgb(93 100 148 / 20%);
}
   
.container {
  height: 100px;
  position: relative;
  border: 3px solid green;
}

.center {
  margin: 0;
  position: absolute;
  top: 40%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.tabel {
  margin: 0 auto;
}

.bottom {
  padding-left: auto;
  padding-right: auto;
  text-align: center;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead {
	th {
		background-color: #55608f;
	}
}

center {
  margin-left: auto;
  margin-right: auto;
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}