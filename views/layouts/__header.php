<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket</title>
    <link
    rel ="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

    
</head>
<body>
    <div class="container-md">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="<?php URL_ROOT ?>/">Supermarket</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toogle="collapse"
                    data-bs-target="#navbar"
                    aria-controls="navbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a
                          class="nav-link active"
                          aria-current="page"
                          href="<?php URL_ROOT ?>/products"
                        >
                            Products
                        </a>
                    </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="<?php URL_ROOT ?>/cart"
                            >
                                Cart
                            </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
