<?php
session_start();

require_once __DIR__ . '/../validations/validateDvd.php';
require_once __DIR__ . '/../validations/validateBook.php';
require_once __DIR__ . '/../validations/validateFurniture.php';
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Dvd.php';
require_once __DIR__ . '/../Models/Book.php';
require_once __DIR__ . '/../Models/Furniture.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-yrfSO0DBjS56u5M+SjWTyAHujrkiYVtRYh2dtB3yLQtUz3bodOeialO59u5lUCFF"
          crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/includes/favicon.ico"/>
    <link rel="stylesheet" href="/includes/styles.css">
    <script src="/includes/scripts.js" defer="defer"></script>
    <title>Add product</title>
</head>

<body>
<form name="myForm" action="/product/store" method="post">
    <div class="container-fluid text-center px-0">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary pl-5 pr-0">
            <a class="navbar-brand" href="/product/new">All products</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link ml-5" href="/product/new">Add</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/product/list">List<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>

            <?php if ($_SERVER['REQUEST_URI'] != "/product/new"): ?>
                <section class="col-md-2 mb-0 p-0 mr-5 float-right d-inline-flex">
                    <select class="form-control" id="actionSelect" name="action">
                        <option value="massDelete">Mass delete</option>
                        <option value="viewDvds">View DVD-discs</option>
                        <option value="viewBooks">View books</option>
                        <option value="viewFurnitures">View furniture</option>
                    </select>
                </section>
            <?php else: ?>

                <button type="submit" class="btn btn-warning saveButton mr-5" name="submit">Save</button>

            <?php endif; ?>
        </nav>
    </div>
    <?php include __DIR__ . '/messages.php'; ?>
    <main class="container-fluid p-2">