@extends('layouts.app')

@section('content')
    <div id="library" class="content-section-style library">
        <div class="content-section-style book-container">
            <div class="header-image-container">
                <img class="header-image" src="\img/content/box-banner.png" alt="Content Box Banner">
                <div class="header-image-text">
                    {{ $bookTitle }}
                </div>
            </div>
            <div class="book-content">
                <div class="inner-header">
                    {{ $bookSubHeading }}
                </div>
                <div class="book-image">
                    <img class="book-image" src="{{ $bookImage }}" alt="Content Box Banner">
                </div>
                <div class="book-text">
                    <div class="book-intro">{{ $bookIntro }}</div>
                    <div class="book-text">{{ $bookText }}</div>
                    <div class="book-button">{{ $bookButton }}</div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .library {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 94%;
        }

        .book-container {
            display: flex;
            flex-direction: column;
            width: 18em;
            min-width: 270px;
            position: relative;
        }

        .image-content img {
            box-shadow: 1px 2px 2px rgba(16, 16, 16, 0.2);
        }

        .header-image-container {
            max-height: 90%;
            max-width: 87.2%;
            transform: translate(-2.8%, 49%);
            position: relative;
            text-align: center;
            color: #0137ca;
            font-size: 3vw;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            z-index: 1;
        }

        .header-image-text {
            font-size: 16px;
            position: absolute;
            top: 25%;
            left: 14%;
        }

        .book-content {
            border: 2px #050966 solid;
            padding: 10px;
            background: #cbdbef;
            font-size: 3vw;
            color: #0137ca;
            font-weight: bold;
            text-shadow: 1px 1px 1px rgba(16, 16, 16, 0.4),
            1px 2px 2px rgba(16, 16, 16, 0.2);
            border-radius: 0 0 15px 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 300px;
            width: 80%;
        }

        .book-content:before {
            content: "";
            border: 1px #050966 solid;
            border-top: none;
            border-radius: 15px;
            height: 82%;
            width: 82%;
            position: absolute;
            transform: translateY(-2%);
            z-index: 0;
        }

        .book-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-width: 30%;
            font-size: 16px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
            margin: auto;
            max-height: 183px;
            z-index: 1;
        }

        .book-label {
            font-size: 16px;
            font-family: "EXCELSIOR SANS", serif;
            font-style: italic;
        }

        .book-image {
            display: flex;
            flex-direction: row;
            height: 70%;
        }

        @media only screen and (max-width: 599px) {
            .book-content:before {
                content: "";
                border: 1px #050966 solid;
                border-top: none;
                border-radius: 15px;
                height: 86%;
                width: 73%;
                position: absolute;
                transform: translate(-1%, -5%);
                z-index: 0;
            }
        }

        @media only screen and  (min-width: 600px) and (max-width: 1531px) {
            .library {
                margin-top: -3em;
            }
        }

        @media only screen and (min-width: 600px) {
            .book-content {
                font-size: 1vw;
                max-width: 90%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 600px;
                width: 85%;
            }

            .header-image-container {
                max-width: 92.6%;
                left: -2.2%;
                transform: translateY(38%);
            }

            .header-image-text {
                font-weight: bolder;
                font-size: 48px;
                top: 25%;
                left: 14%;
                transform: translateY(-2%);
            }

            .book-container {
                max-width: 40%;
                min-width: 45em;
            }

            .book-image {
                max-height: 410px;
            }

            .book-label {
                font-size: 40px;
                bottom: 10px;
            }
        }
    </style>
@endsection