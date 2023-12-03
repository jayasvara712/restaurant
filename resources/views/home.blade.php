<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .div {
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-direction: column;
        }
        .div-2 {
            background-color: #c33;
            align-self: stretch;
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 8px 60px;
        }
        @media (max-width: 991px) {
            .div-2 {
            max-width: 100%;
            padding: 0 20px;
            }
        }
        .div-3 {
            display: flex;
            width: 100%;
            max-width: 1211px;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }
        @media (max-width: 991px) {
            .div-3 {
            max-width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            }
        }
        .div-4 {
            align-self: stretch;
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }
        .img {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: #fff8ee;
            overflow: hidden;
            max-width: 100%;
        }
        .div-5 {
            color: #fff8ee;
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 400 12px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-5 {
            white-space: initial;
            }
        }
        .div-6 {
            align-self: stretch;
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }
        .div-7 {
            color: #fff8ee;
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 400 12px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-7 {
            white-space: initial;
            }
        }
        .div-8 {
            color: #fff8ee;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 400 12px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-8 {
            white-space: initial;
            }
        }
        .div-9 {
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: var(--3rd-color, #fff8ee);
            align-self: stretch;
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 22px 60px;
        }
        @media (max-width: 991px) {
            .div-9 {
            max-width: 100%;
            padding: 0 20px;
            }
        }
        .div-10 {
            display: flex;
            width: 100%;
            max-width: 1198px;
            justify-content: space-between;
            gap: 20px;
        }
        @media (max-width: 991px) {
            .div-10 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .img-2 {
            aspect-ratio: 1.49;
            object-fit: contain;
            object-position: center;
            width: 112px;
            overflow: hidden;
            max-width: 100%;
        }
        .div-11 {
            align-self: start;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 11px;
        }
        @media (max-width: 991px) {
            .div-11 {
            max-width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            }
        }
        .div-12 {
            color: var(--second-color, #2a435d);
            align-self: center;
            white-space: nowrap;
            margin: auto 0;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-12 {
            white-space: initial;
            }
        }
        .div-13 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin: auto 0;
            font: 700 20px Roboto, sans-serif;
        }
        .div-14 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin: auto 0;
            font: 700 20px Roboto, sans-serif;
        }
        .div-15 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin: auto 0;
            font: 700 20px Roboto, sans-serif;
        }
        .div-16 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin: auto 0;
            font: 700 20px Roboto, sans-serif;
        }
        .img-3 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 60px;
            overflow: hidden;
            border-radius: 50%;
            align-self: stretch;
            max-width: 100%;
        }
        .div-17 {
            align-self: center;
            display: flex;
            flex-grow: 1;
            flex-basis: 0%;
            flex-direction: column;
            margin: auto 0;
        }
        .div-18 {
            color: var(--second-color, #2a435d);
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-18 {
            white-space: initial;
            }
        }
        .div-19 {
            color: var(--second-color, #2a435d);
            white-space: nowrap;
            font: 400 15px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-19 {
            white-space: initial;
            }
        }
        .img-4 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 35px;
            overflow: hidden;
            align-self: center;
            max-width: 100%;
            margin: auto 0;
        }
        .div-20 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            border-radius: 10px;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.25);
            background-color: var(--primary-color, #c33);
            align-self: center;
            flex-grow: 1;
            justify-content: center;
            margin: auto 0;
            padding: 11px 20px;
            font: 700 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-20 {
            white-space: initial;
            }
        }
        .div-21 {
            align-self: center;
            width: 953px;
            max-width: 100%;
        }
        .div-22 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-22 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 54%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column {
            width: 100%;
            }
        }
        .div-23 {
            z-index: 1;
            display: flex;
            margin-top: 28px;
            flex-grow: 1;
            flex-direction: column;
            align-items: end;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-23 {
            max-width: 100%;
            }
        }
        .div-24 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            white-space: nowrap;
            font: italic 500 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-24 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-25 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 27px;
            font: italic 500 50px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-25 {
            max-width: 100%;
            font-size: 40px;
            }
        }
        .div-26 {
            display: flex;
            margin-top: 71px;
            justify-content: space-between;
            gap: 20px;
        }
        @media (max-width: 991px) {
            .div-26 {
            margin-top: 40px;
            }
        }
        .div-27 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            border-radius: 10px;
            background-color: var(--primary-color, #c33);
            flex-grow: 1;
            justify-content: center;
            padding: 17px 13px 17px 22px;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-27 {
            white-space: initial;
            padding-left: 20px;
            }
        }
        .div-28 {
            color: var(--second-color, #2a435d);
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-28 {
            white-space: initial;
            }
        }
        .column-2 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 46%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-2 {
            width: 100%;
            }
        }
        .img-5 {
            aspect-ratio: 1.5;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
        }
        @media (max-width: 991px) {
            .img-5 {
            max-width: 100%;
            }
        }
        .div-29 {
            align-self: center;
            display: flex;
            margin-top: 8px;
            width: 100%;
            max-width: 1166px;
            align-items: start;
            justify-content: space-between;
            gap: 20px;
        }
        @media (max-width: 991px) {
            .div-29 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .img-6 {
            aspect-ratio: 6.4;
            object-fit: contain;
            object-position: center;
            width: 160px;
            overflow: hidden;
            max-width: 100%;
        }
        .div-30 {
            align-self: end;
            display: flex;
            margin-top: 21px;
            gap: 9px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-30 {
            justify-content: center;
            }
        }
        .div-31 {
            border-radius: 50%;
            display: flex;
            width: 20px;
            height: 20px;
            flex-direction: column;
        }
        .div-32 {
            stroke-width: 2px;
            border-radius: 50%;
            display: flex;
            width: 20px;
            height: 20px;
            flex-direction: column;
        }
        .div-33 {
            stroke-width: 2px;
            border-radius: 50%;
            display: flex;
            width: 20px;
            height: 20px;
            flex-direction: column;
        }
        .div-34 {
            stroke-width: 2px;
            border-radius: 50%;
            display: flex;
            width: 20px;
            height: 20px;
            flex-direction: column;
        }
        .div-35 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin-top: 50px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-35 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-36 {
            color: var(--primary-color, #c33);
            align-self: center;
            margin-top: 14px;
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-36 {
            white-space: initial;
            }
        }
        .div-37 {
            align-self: center;
            display: flex;
            margin-top: 22px;
            width: 100%;
            max-width: 1219px;
            gap: 18px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-37 {
            max-width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            }
        }
        .img-7 {
            aspect-ratio: 1.91;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex: 1;
        }
        .img-8 {
            aspect-ratio: 1.92;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex: 1;
        }
        .img-9 {
            aspect-ratio: 1.91;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex: 1;
        }
        .img-10 {
            aspect-ratio: 1.92;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex: 1;
        }
        .img-11 {
            aspect-ratio: 1.91;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex: 1;
        }
        .div-38 {
            align-self: center;
            margin-top: 54px;
            width: 100%;
            max-width: 1220px;
        }
        @media (max-width: 991px) {
            .div-38 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-39 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-39 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-3 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 30%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-3 {
            width: 100%;
            }
        }
        .img-12 {
            aspect-ratio: 0.6;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            margin-top: 34px;
            flex-grow: 1;
        }
        @media (max-width: 991px) {
            .img-12 {
            margin-top: 40px;
            }
        }
        .column-4 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 70%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-4 {
            width: 100%;
            }
        }
        .div-40 {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-40 {
            max-width: 100%;
            margin-top: 29px;
            }
        }
        .div-41 {
            color: var(--second-color, #2a435d);
            align-self: start;
            margin-left: 122px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-41 {
            margin-left: 10px;
            white-space: initial;
            }
        }
        .div-42 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 26px;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-42 {
            max-width: 100%;
            }
        }
        .div-43 {
            color: var(--second-color, #2a435d);
            align-self: stretch;
            margin-top: 36px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-43 {
            max-width: 100%;
            }
        }
        .div-44 {
            align-self: stretch;
            margin-top: 25px;
        }
        @media (max-width: 991px) {
            .div-44 {
            max-width: 100%;
            }
        }
        .div-45 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-45 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-5 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 56%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-5 {
            width: 100%;
            }
        }
        .div-46 {
            display: flex;
            flex-direction: column;
            margin: auto 0;
        }
        @media (max-width: 991px) {
            .div-46 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-47 {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        @media (max-width: 991px) {
            .div-47 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .div-48 {
            display: flex;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
        }
        .img-13 {
            aspect-ratio: 1.05;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--primary-color, #c33);
            overflow: hidden;
        }
        .img-14 {
            aspect-ratio: 1.05;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--primary-color, #c33);
            overflow: hidden;
            margin-top: 38px;
        }
        .img-15 {
            aspect-ratio: 1.05;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--primary-color, #c33);
            overflow: hidden;
            margin-top: 39px;
        }
        .div-49 {
            color: var(--second-color, #2a435d);
            flex-grow: 1;
            flex-basis: auto;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-49 {
            max-width: 100%;
            }
        }
        .div-50 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            border-radius: 20px;
            background-color: var(--primary-color, #c33);
            align-self: center;
            margin-top: 115px;
            justify-content: center;
            padding: 17px 60px 17px 54px;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-50 {
            white-space: initial;
            margin-top: 40px;
            padding: 0 20px;
            }
        }
        .column-6 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 44%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-6 {
            width: 100%;
            }
        }
        .img-16 {
            aspect-ratio: 0.95;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex-grow: 1;
        }
        @media (max-width: 991px) {
            .img-16 {
            margin-top: 15px;
            }
        }
        .div-51 {
            color: var(--primary-color, #c33);
            align-self: center;
            margin-top: 59px;
            white-space: nowrap;
            font: italic 800 50px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-51 {
            font-size: 40px;
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-52 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin-top: 19px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-52 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-53 {
            align-self: stretch;
            margin-top: 25px;
            width: 100%;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-53 {
            max-width: 100%;
            }
        }
        .div-54 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-54 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-7 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 29%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-7 {
            width: 100%;
            }
        }
        .img-17 {
            aspect-ratio: 2.03;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex-grow: 1;
        }
        @media (max-width: 991px) {
            .img-17 {
            margin-top: 21px;
            }
        }
        .column-8 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 40%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-8 {
            width: 100%;
            }
        }
        .img-18 {
            aspect-ratio: 2.8;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex-grow: 1;
        }
        @media (max-width: 991px) {
            .img-18 {
            max-width: 100%;
            margin-top: 21px;
            }
        }
        .column-9 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 31%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-9 {
            width: 100%;
            }
        }
        .img-19 {
            aspect-ratio: 2.16;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            flex-grow: 1;
        }
        @media (max-width: 991px) {
            .img-19 {
            max-width: 100%;
            margin-top: 21px;
            }
        }
        .div-55 {
            color: var(--primary-color, #c33);
            align-self: center;
            margin-top: 54px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-55 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-56 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin-top: 27px;
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-56 {
            white-space: initial;
            }
        }
        .div-57 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin-top: 27px;
            white-space: nowrap;
            font: 400 15px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-57 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-58 {
            align-self: center;
            display: flex;
            margin-top: 22px;
            width: 100%;
            max-width: 1220px;
            gap: 0px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-58 {
            max-width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            }
        }
        .div-59 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            background-color: var(--primary-color, #c33);
            flex-grow: 1;
            justify-content: center;
            align-items: start;
            padding: 21px 60px 21px 54px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-59 {
            white-space: initial;
            padding: 0 20px;
            }
        }
        .div-60 {
            background-color: #2a435d;
            width: 1px;
            height: 60px;
        }
        .div-61 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            background-color: var(--3rd-color, #fff8ee);
            flex-grow: 1;
            justify-content: center;
            align-items: center;
            padding: 18px 60px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-61 {
            white-space: initial;
            padding: 0 20px;
            }
        }
        .div-62 {
            background-color: #2a435d;
            width: 1px;
            height: 60px;
        }
        .div-63 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            background-color: var(--3rd-color, #fff8ee);
            flex-grow: 1;
            justify-content: center;
            align-items: center;
            padding: 21px 60px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-63 {
            white-space: initial;
            padding: 0 20px;
            }
        }
        .div-64 {
            background-color: #2a435d;
            width: 1px;
            height: 60px;
        }
        .div-65 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            background-color: var(--3rd-color, #fff8ee);
            flex-grow: 1;
            justify-content: center;
            align-items: center;
            padding: 21px 60px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-65 {
            white-space: initial;
            padding: 0 20px;
            }
        }
        .div-66 {
            background-color: #2a435d;
            width: 1px;
            height: 60px;
        }
        .div-67 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            background-color: var(--3rd-color, #fff8ee);
            flex-grow: 1;
            justify-content: center;
            align-items: start;
            padding: 21px 60px 21px 53px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-67 {
            white-space: initial;
            padding: 0 20px;
            }
        }
        .div-68 {
            align-self: center;
            margin-top: 18px;
            width: 100%;
            max-width: 1220px;
        }
        @media (max-width: 991px) {
            .div-68 {
            max-width: 100%;
            }
        }
        .div-69 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-69 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-10 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 47%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-10 {
            width: 100%;
            }
        }
        .div-70 {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .div-70 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-71 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 11px;
        }
        @media (max-width: 991px) {
            .div-71 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .img-20 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 40px;
            overflow: hidden;
            max-width: 100%;
            margin: auto 0;
        }
        .img-21 {
            aspect-ratio: 0.8;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            align-self: stretch;
            flex-grow: 1;
            flex-basis: 0%;
        }
        @media (max-width: 991px) {
            .img-21 {
            max-width: 100%;
            }
        }
        .div-72 {
            background-color: var(--primary-color, #c33);
            align-self: end;
            display: flex;
            width: 489px;
            max-width: 100%;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 10px 16px 10px 80px;
        }
        @media (max-width: 991px) {
            .div-72 {
            flex-wrap: wrap;
            padding-left: 20px;
            }
        }
        .div-73 {
            color: var(--3rd-color, #fff8ee);
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-73 {
            white-space: initial;
            }
        }
        .img-22 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 40px;
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .column-11 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 53%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-11 {
            width: 100%;
            }
        }
        .div-74 {
            display: flex;
            margin-top: 8px;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .div-74 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-75 {
        }
        @media (max-width: 991px) {
            .div-75 {
            max-width: 100%;
            }
        }
        .div-76 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-76 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-12 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 84%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-12 {
            width: 100%;
            }
        }
        .div-77 {
            display: flex;
            flex-direction: column;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-77 {
            max-width: 100%;
            margin-top: 12px;
            }
        }
        .div-78 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-78 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-79 {
            color: var(--second-color, #2a435d);
            margin-top: 15px;
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-79 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-80 {
            background-color: var(--second-color, #c33);
            margin-top: 9px;
            height: 2px;
        }
        @media (max-width: 991px) {
            .div-80 {
            max-width: 100%;
            }
        }
        .div-81 {
            color: var(--primary-color, #c33);
            margin-top: 28px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-81 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-82 {
            color: var(--second-color, #2a435d);
            margin-top: 15px;
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-82 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-83 {
            background-color: var(--second-color, #c33);
            margin-top: 9px;
            height: 2px;
        }
        @media (max-width: 991px) {
            .div-83 {
            max-width: 100%;
            }
        }
        .div-84 {
            color: var(--primary-color, #c33);
            margin-top: 28px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-84 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-85 {
            color: var(--second-color, #2a435d);
            margin-top: 15px;
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-85 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-86 {
            background-color: var(--second-color, #c33);
            margin-top: 9px;
            height: 2px;
        }
        @media (max-width: 991px) {
            .div-86 {
            max-width: 100%;
            }
        }
        .div-87 {
            color: var(--primary-color, #c33);
            margin-top: 29px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-87 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .column-13 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 16%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-13 {
            width: 100%;
            }
        }
        .div-88 {
            display: flex;
            margin-top: 49px;
            flex-grow: 1;
            flex-direction: column;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-88 {
            margin-top: 40px;
            }
        }
        .div-89 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-89 {
            white-space: initial;
            }
        }
        .div-90 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 77px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-90 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-91 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 77px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-91 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .img-23 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 40px;
            overflow: hidden;
            align-self: end;
            margin-top: 23px;
        }
        .div-92 {
            display: flex;
            align-items: start;
            justify-content: space-between;
            gap: 12px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-92 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .div-93 {
            display: flex;
            flex-grow: 1;
            flex-basis: 0%;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .div-93 {
            max-width: 100%;
            }
        }
        .div-94 {
            color: var(--second-color, #2a435d);
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-94 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-95 {
            background-color: var(--second-color, #c33);
            margin-top: 9px;
            height: 2px;
        }
        @media (max-width: 991px) {
            .div-95 {
            max-width: 100%;
            }
        }
        .div-96 {
            color: var(--primary-color, #c33);
            margin-top: 12px;
            flex-grow: 1;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-96 {
            white-space: initial;
            }
        }
        .div-97 {
            display: flex;
            margin-top: 28px;
            align-items: start;
            justify-content: space-between;
            gap: 12px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-97 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .div-98 {
            display: flex;
            flex-grow: 1;
            flex-basis: 0%;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .div-98 {
            max-width: 100%;
            }
        }
        .div-99 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-99 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-100 {
            color: var(--second-color, #2a435d);
            margin-top: 15px;
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-100 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-101 {
            background-color: var(--second-color, #c33);
            margin-top: 13px;
            height: 2px;
        }
        @media (max-width: 991px) {
            .div-101 {
            max-width: 100%;
            }
        }
        .div-102 {
            color: var(--primary-color, #c33);
            align-self: end;
            margin-top: 49px;
            flex-grow: 1;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-102 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-103 {
            display: flex;
            margin-top: 27px;
            justify-content: space-between;
            gap: 12px;
        }
        @media (max-width: 991px) {
            .div-103 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .div-104 {
            display: flex;
            flex-grow: 1;
            flex-basis: 0%;
            flex-direction: column;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-104 {
            max-width: 100%;
            }
        }
        .div-105 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-105 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-106 {
            color: var(--second-color, #2a435d);
            margin-top: 19px;
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-106 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-107 {
            background-color: var(--second-color, #c33);
            margin-top: 9px;
            height: 2px;
        }
        @media (max-width: 991px) {
            .div-107 {
            max-width: 100%;
            }
        }
        .div-108 {
            color: var(--primary-color, #c33);
            margin-top: 29px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-108 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-109 {
            color: var(--second-color, #2a435d);
            margin-top: 15px;
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-109 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-110 {
            background-color: var(--second-color, #c33);
            margin-top: 9px;
            height: 2px;
        }
        @media (max-width: 991px) {
            .div-110 {
            max-width: 100%;
            }
        }
        .div-111 {
            align-self: end;
            display: flex;
            margin-top: 50px;
            flex-basis: 0%;
            flex-direction: column;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-111 {
            margin-top: 40px;
            }
        }
        .div-112 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-112 {
            white-space: initial;
            }
        }
        .div-113 {
            color: var(--primary-color, #c33);
            margin-top: 77px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-113 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-114 {
            color: var(--primary-color, #c33);
            align-self: center;
            margin-top: 77px;
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-114 {
            max-width: 100%;
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-115 {
            align-self: center;
            display: flex;
            margin-top: 40px;
            gap: 20px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-115 {
            max-width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            }
        }
        .div-116 {
            border-radius: 20px;
            background-color: var(--primary-color, #c33);
            display: flex;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
            height: 180px;
            flex: 1;
            padding: 19px 36px;
        }
        @media (max-width: 991px) {
            .div-116 {
            padding: 0 20px;
            }
        }
        .img-24 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
        }
        .div-117 {
            color: var(--3rd-color, #fff8ee);
            margin-top: 33px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-117 {
            white-space: initial;
            }
        }
        .div-118 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
            height: 180px;
            flex: 1;
            padding: 22px 21px 22px 16px;
        }
        @media (max-width: 991px) {
            .div-118 {
            padding-right: 20px;
            }
        }
        .img-25 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 108px;
            overflow: hidden;
            max-width: 100%;
        }
        .div-119 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 32px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-119 {
            white-space: initial;
            }
        }
        .div-120 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
            height: 180px;
            flex: 1;
            padding: 19px 9px 12px;
        }
        .img-26 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 108px;
            overflow: hidden;
            max-width: 100%;
        }
        .div-121 {
            color: var(--primary-color, #c33);
            text-align: center;
            align-self: stretch;
            margin-top: 15px;
            font: 400 25px Roboto, sans-serif;
        }
        .div-122 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
            height: 180px;
            flex: 1;
            padding: 22px 36px;
        }
        @media (max-width: 991px) {
            .div-122 {
            padding: 0 20px;
            }
        }
        .img-27 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
        }
        .div-123 {
            color: var(--primary-color, #c33);
            margin-top: 33px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-123 {
            white-space: initial;
            }
        }
        .div-124 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
            height: 180px;
            flex: 1;
            padding: 17px 34px;
        }
        @media (max-width: 991px) {
            .div-124 {
            padding: 0 20px;
            }
        }
        .img-28 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
        }
        .div-125 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 33px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-125 {
            white-space: initial;
            }
        }
        .div-126 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
            height: 180px;
            flex: 1;
            padding: 19px 36px 9px;
        }
        @media (max-width: 991px) {
            .div-126 {
            padding: 0 20px;
            }
        }
        .img-29 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
        }
        .div-127 {
            color: var(--primary-color, #c33);
            text-align: center;
            align-self: start;
            margin: 18px 0 0 15px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-127 {
            margin-left: 10px;
            }
        }
        .div-128 {
            align-self: center;
            margin-top: 20px;
            width: 780px;
            max-width: 100%;
            padding: 0 20px;
        }
        .div-129 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-129 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-14 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 25%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-14 {
            width: 100%;
            }
        }
        .div-130 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 180px;
            height: 180px;
            margin: 0 auto;
            padding: 22px 25px;
        }
        @media (max-width: 991px) {
            .div-130 {
            margin-top: 20px;
            padding: 0 20px;
            }
        }
        .img-30 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 108px;
            overflow: hidden;
            max-width: 100%;
        }
        .div-131 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 32px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-131 {
            white-space: initial;
            }
        }
        .column-15 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 25%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-15 {
            width: 100%;
            }
        }
        .div-132 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 180px;
            height: 180px;
            margin: 0 auto;
            padding: 22px 36px;
        }
        @media (max-width: 991px) {
            .div-132 {
            margin-top: 20px;
            padding: 0 20px;
            }
        }
        .img-31 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
        }
        .div-133 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 32px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-133 {
            white-space: initial;
            }
        }
        .column-16 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 25%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-16 {
            width: 100%;
            }
        }
        .div-134 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 180px;
            height: 180px;
            margin: 0 auto;
            padding: 19px 15px 9px 6px;
        }
        @media (max-width: 991px) {
            .div-134 {
            margin-top: 20px;
            }
        }
        .img-32 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 108px;
            overflow: hidden;
            max-width: 100%;
        }
        .div-135 {
            color: var(--primary-color, #c33);
            text-align: center;
            align-self: stretch;
            margin-top: 18px;
            font: 400 25px Roboto, sans-serif;
        }
        .column-17 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 25%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-17 {
            width: 100%;
            }
        }
        .div-136 {
            border-radius: 20px;
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 180px;
            height: 180px;
            margin: 0 auto;
            padding: 19px 36px 9px;
        }
        @media (max-width: 991px) {
            .div-136 {
            margin-top: 20px;
            padding: 0 20px;
            }
        }
        .img-33 {
            aspect-ratio: 1.26;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
        }
        .div-137 {
            color: var(--primary-color, #c33);
            text-align: center;
            align-self: stretch;
            margin-top: 18px;
            font: 400 25px Roboto, sans-serif;
        }
        .div-138 {
            color: var(--primary-color, #c33);
            align-self: center;
            margin-top: 84px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-138 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-139 {
            align-self: center;
            margin-top: 26px;
            width: 100%;
            max-width: 1201px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-139 {
            max-width: 100%;
            }
        }
        .div-140 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-140 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-18 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 19%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-18 {
            width: 100%;
            }
        }
        .img-34 {
            aspect-ratio: 1.5;
            object-fit: contain;
            object-position: center;
            width: 230px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            margin-top: 28px;
            max-width: 100%;
            flex-grow: 1;
        }
        @media (max-width: 991px) {
            .img-34 {
            margin-top: 38px;
            }
        }
        .column-19 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 23%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-19 {
            width: 100%;
            }
        }
        .img-35 {
            aspect-ratio: 1.5;
            object-fit: contain;
            object-position: center;
            width: 230px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            margin-top: 28px;
            max-width: 100%;
            flex-grow: 1;
        }
        @media (max-width: 991px) {
            .img-35 {
            margin-top: 38px;
            }
        }
        .column-20 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 57%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-20 {
            width: 100%;
            }
        }
        .div-141 {
            display: flex;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .div-141 {
            max-width: 100%;
            margin-top: 10px;
            }
        }
        .div-142 {
            color: var(--second-color, #2a435d);
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-142 {
            max-width: 100%;
            }
        }
        .div-143 {
            color: var(--second-color, #2a435d);
            margin-top: 27px;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-143 {
            max-width: 100%;
            }
        }
        .div-144 {
            align-self: center;
            display: flex;
            width: 100%;
            max-width: 1187px;
            align-items: start;
            justify-content: space-between;
            gap: 19px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-144 {
            max-width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            }
        }
        .img-36 {
            aspect-ratio: 1.47;
            object-fit: contain;
            object-position: center;
            width: 100%;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            margin-top: 8px;
            flex-grow: 1;
            flex-basis: 0%;
        }
        @media (max-width: 991px) {
            .img-36 {
            max-width: 100%;
            }
        }
        .div-145 {
            display: flex;
            flex-basis: 0%;
            flex-direction: column;
        }
        .div-146 {
            stroke-width: 3px;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 25px 30px 25px 20px;
        }
        @media (max-width: 991px) {
            .div-146 {
            padding-right: 20px;
            }
        }
        .img-37 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 50px;
            overflow: hidden;
        }
        .div-147 {
            stroke-width: 3px;
            border-radius: 50%;
            display: flex;
            margin-top: 68px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 25px 30px 25px 20px;
        }
        @media (max-width: 991px) {
            .div-147 {
            padding-right: 20px;
            margin-top: 40px;
            }
        }
        .img-38 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 50px;
            overflow: hidden;
        }
        .div-148 {
            display: flex;
            margin-top: 6px;
            flex-grow: 1;
            flex-basis: 0%;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .div-148 {
            max-width: 100%;
            }
        }
        .div-149 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-149 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-150 {
            color: var(--second-color, #2a435d);
            align-self: stretch;
            margin-top: 14px;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-150 {
            max-width: 100%;
            }
        }
        .div-151 {
            border-radius: 25px;
            background-color: var(--primary-color, #c33);
            align-self: start;
            display: flex;
            align-items: start;
            justify-content: space-between;
            gap: 20px;
            margin: 17px 0 0 30px;
            padding: 8px 10px;
        }
        @media (max-width: 991px) {
            .div-151 {
            margin-left: 10px;
            }
        }
        .div-152 {
            color: var(--3rd-color, #fff8ee);
            flex-grow: 1;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-152 {
            white-space: initial;
            }
        }
        .img-39 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .div-153 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 29px;
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-153 {
            max-width: 100%;
            white-space: initial;
            }
        }
        .div-154 {
            color: var(--second-color, #2a435d);
            align-self: stretch;
            margin-top: 21px;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-154 {
            max-width: 100%;
            }
        }
        .div-155 {
            border-radius: 25px;
            background-color: var(--3rd-color, #fff8ee);
            align-self: start;
            display: flex;
            align-items: start;
            gap: 20px;
            margin: 17px 0 0 30px;
            padding: 8px 10px;
        }
        @media (max-width: 991px) {
            .div-155 {
            margin-left: 10px;
            }
        }
        .div-156 {
            color: var(--primary-color, #c33);
            flex-grow: 1;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-156 {
            white-space: initial;
            }
        }
        .img-40 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .div-157 {
            align-self: center;
            margin-top: 97px;
            width: 100%;
            max-width: 1072px;
        }
        @media (max-width: 991px) {
            .div-157 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-158 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-158 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .div-159 {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-159 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-160 {
            color: var(--primary-color, #c33);
            align-self: center;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-160 {
            white-space: initial;
            }
        }
        .div-161 {
            color: var(--primary-color, #c33);
            align-self: stretch;
            margin-top: 33px;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-161 {
            max-width: 100%;
            }
        }
        .div-162 {
            color: var(--second-color, #2a435d);
            align-self: stretch;
            margin-top: 33px;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-162 {
            max-width: 100%;
            }
        }
        .div-163 {
            align-self: start;
            display: flex;
            width: 421px;
            max-width: 100%;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin: 69px 0 0 11px;
        }
        @media (max-width: 991px) {
            .div-163 {
            flex-wrap: wrap;
            margin-top: 40px;
            }
        }
        .div-164 {
            display: flex;
            align-items: start;
            gap: 11px;
            margin: auto 0;
        }
        .div-165 {
            display: flex;
            flex-grow: 1;
            flex-basis: 0%;
            flex-direction: column;
        }
        .div-166 {
            color: var(--second-color, #2a435d);
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-166 {
            white-space: initial;
            }
        }
        .div-167 {
            color: var(--second-color, #2a435d);
            white-space: nowrap;
            font: 400 15px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-167 {
            white-space: initial;
            }
        }
        .img-41 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 35px;
            overflow: hidden;
            max-width: 100%;
        }
        .div-168 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            border-radius: 10px;
            box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.25);
            background-color: var(--primary-color, #c33);
            align-self: stretch;
            flex-grow: 1;
            justify-content: center;
            padding: 16px 22px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-168 {
            white-space: initial;
            padding: 0 20px;
            }
        }
        .column-21 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 46%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-21 {
            width: 100%;
            }
        }
        .img-42 {
            aspect-ratio: 1.43;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            margin-top: 47px;
            flex-grow: 1;
        }
        @media (max-width: 991px) {
            .img-42 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-169 {
            color: var(--primary-color, #c33);
            align-self: center;
            margin-top: 93px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-169 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-170 {
            align-self: center;
            margin-top: 34px;
            width: 100%;
            max-width: 1220px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-170 {
            max-width: 100%;
            }
        }
        .div-171 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-171 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-22 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 33%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-22 {
            width: 100%;
            }
        }
        .div-172 {
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            width: 100%;
            flex-grow: 1;
            flex-direction: column;
            margin: 0 auto;
            padding: 17px 28px;
        }
        @media (max-width: 991px) {
            .div-172 {
            padding: 0 20px;
            }
        }
        .div-173 {
            align-self: end;
            display: flex;
            margin-right: 52px;
            width: 163px;
            max-width: 100%;
            align-items: end;
            gap: 0px;
        }
        @media (max-width: 991px) {
            .div-173 {
            margin-right: 10px;
            }
        }
        .img-43 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            z-index: 1;
            margin-top: 20px;
            flex: 1;
        }
        .div-174 {
            color: var(--3rd-color, #fff8ee);
            border-radius: 50%;
            align-self: stretch;
            flex-grow: 1;
            justify-content: center;
            padding: 38px 48px 38px 41px;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-174 {
            padding: 0 20px;
            }
        }
        .div-175 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin-top: 43px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-175 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-176 {
            color: var(--second-color, #2a435d);
            align-self: stretch;
            margin-top: 29px;
            font: 400 18px Roboto, sans-serif;
        }
        .div-177 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            border-radius: 10px;
            box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.25);
            background-color: var(--primary-color, #c33);
            align-self: end;
            margin-top: 51px;
            justify-content: center;
            padding: 16px 21px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-177 {
            white-space: initial;
            margin-top: 40px;
            padding: 0 20px;
            }
        }
        .column-23 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 33%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-23 {
            width: 100%;
            }
        }
        .div-178 {
            background-color: var(--primary-color, #c33);
            display: flex;
            width: 100%;
            flex-grow: 1;
            flex-direction: column;
            margin: 0 auto;
            padding: 17px 31px;
        }
        @media (max-width: 991px) {
            .div-178 {
            padding: 0 20px;
            }
        }
        .div-179 {
            align-self: end;
            display: flex;
            margin-right: 47px;
            width: 164px;
            max-width: 100%;
            align-items: end;
            gap: 0px;
        }
        @media (max-width: 991px) {
            .div-179 {
            margin-right: 10px;
            }
        }
        .img-44 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            z-index: 1;
            margin-top: 20px;
            flex: 1;
        }
        .div-180 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            border-radius: 50%;
            align-self: stretch;
            flex-grow: 1;
            justify-content: center;
            padding: 38px 41px;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-180 {
            white-space: initial;
            padding: 0 20px;
            }
        }
        .div-181 {
            color: var(--3rd-color, #fff8ee);
            align-self: center;
            margin-top: 43px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-181 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-182 {
            color: var(--3rd-color, #fff8ee);
            align-self: stretch;
            margin-top: 29px;
            font: 400 18px Roboto, sans-serif;
        }
        .div-183 {
            color: var(--primary-color, #c33);
            white-space: nowrap;
            border-radius: 10px;
            box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.25);
            background-color: var(--3rd-color, #fff8ee);
            align-self: end;
            justify-content: center;
            margin: 51px 15px 0 0;
            padding: 16px 21px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-183 {
            white-space: initial;
            margin: 40px 10px 0 0;
            padding: 0 20px;
            }
        }
        .column-24 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 33%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-24 {
            width: 100%;
            }
        }
        .div-184 {
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            width: 100%;
            flex-grow: 1;
            flex-direction: column;
            margin: 0 auto;
            padding: 17px 27px;
        }
        @media (max-width: 991px) {
            .div-184 {
            padding: 0 20px;
            }
        }
        .div-185 {
            align-self: end;
            display: flex;
            margin-right: 55px;
            width: 159px;
            max-width: 100%;
            align-items: end;
            gap: 0px;
        }
        @media (max-width: 991px) {
            .div-185 {
            margin-right: 10px;
            }
        }
        .img-45 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 100%;
            overflow: hidden;
            z-index: 1;
            margin-top: 20px;
            flex: 1;
        }
        .div-186 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            border-radius: 50%;
            align-self: stretch;
            flex-grow: 1;
            justify-content: center;
            padding: 38px 42px;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-186 {
            white-space: initial;
            padding: 0 20px;
            }
        }
        .div-187 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin-top: 43px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-187 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-188 {
            color: var(--second-color, #2a435d);
            align-self: stretch;
            margin-top: 29px;
            font: 400 18px Roboto, sans-serif;
        }
        .div-189 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            border-radius: 10px;
            box-shadow: 0px 0px 3px 1px rgba(0, 0, 0, 0.25);
            background-color: var(--primary-color, #c33);
            align-self: end;
            margin-top: 51px;
            justify-content: center;
            padding: 16px 21px;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-189 {
            white-space: initial;
            margin-top: 40px;
            padding: 0 20px;
            }
        }
        .div-190 {
            align-self: stretch;
            margin-top: 83px;
            width: 100%;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-190 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-191 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-191 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-25 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 33%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-25 {
            width: 100%;
            }
        }
        .div-192 {
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            width: 434px;
            max-width: 100%;
            height: 300px;
            flex-direction: column;
            margin: 96px auto 0;
        }
        @media (max-width: 991px) {
            .div-192 {
            margin-top: 40px;
            }
        }
        .column-26 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 34%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-26 {
            width: 100%;
            }
        }
        .div-193 {
            display: flex;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .div-193 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-194 {
            color: var(--primary-color, #c33);
            align-self: center;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-194 {
            white-space: initial;
            }
        }
        .div-195 {
            color: var(--primary-color, #c33);
            align-self: center;
            margin-top: 25px;
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-195 {
            white-space: initial;
            }
        }
        .img-46 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 100px;
            overflow: hidden;
            border-radius: 50%;
            align-self: center;
            margin-top: 33px;
            max-width: 100%;
        }
        .div-196 {
            color: var(--second-color, #2a435d);
            text-align: center;
            align-self: center;
            margin-top: 19px;
            white-space: nowrap;
            font: 400 25px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-196 {
            white-space: initial;
            }
        }
        .div-197 {
            color: var(--second-color, #2a435d);
            text-align: center;
            align-self: stretch;
            margin-top: 25px;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-197 {
            max-width: 100%;
            }
        }
        .img-47 {
            aspect-ratio: 7.1;
            object-fit: contain;
            object-position: center;
            width: 142px;
            overflow: hidden;
            align-self: end;
            margin-top: 35px;
            max-width: 100%;
        }
        .column-27 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 33%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-27 {
            width: 100%;
            }
        }
        .div-198 {
            background-color: var(--3rd-color, #fff8ee);
            display: flex;
            width: 430px;
            max-width: 100%;
            height: 300px;
            flex-direction: column;
            margin: 96px auto 0;
        }
        @media (max-width: 991px) {
            .div-198 {
            margin-top: 40px;
            }
        }
        .div-199 {
            align-self: center;
            display: flex;
            margin-top: 20px;
            width: 107px;
            max-width: 100%;
            gap: 9px;
            padding: 0 20px;
        }
        @media (max-width: 991px) {
            .div-199 {
            justify-content: center;
            }
        }
        .div-200 {
            stroke-width: 2px;
            border-radius: 50%;
            display: flex;
            height: 20px;
            flex-direction: column;
            flex: 1;
        }
        .div-201 {
            stroke-width: 2px;
            border-radius: 50%;
            display: flex;
            height: 20px;
            flex-direction: column;
            flex: 1;
        }
        .div-202 {
            stroke-width: 2px;
            border-radius: 50%;
            display: flex;
            height: 20px;
            flex-direction: column;
            flex: 1;
        }
        .div-203 {
            stroke-width: 2px;
            border-radius: 50%;
            display: flex;
            height: 20px;
            flex-direction: column;
            flex: 1;
        }
        .div-204 {
            color: var(--second-color, #2a435d);
            align-self: center;
            margin-top: 87px;
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-204 {
            margin-top: 40px;
            white-space: initial;
            }
        }
        .div-205 {
            background-color: var(--primary-color, #c33);
            align-self: stretch;
            display: flex;
            margin-top: 44px;
            width: 100%;
            flex-direction: column;
            align-items: center;
            padding: 43px 60px 17px;
        }
        @media (max-width: 991px) {
            .div-205 {
            max-width: 100%;
            margin-top: 40px;
            padding: 0 20px;
            }
        }
        .div-206 {
            width: 100%;
            max-width: 1142px;
        }
        @media (max-width: 991px) {
            .div-206 {
            max-width: 100%;
            }
        }
        .div-207 {
            gap: 20px;
            display: flex;
        }
        @media (max-width: 991px) {
            .div-207 {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }
        .column-28 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 67%;
            margin-left: 0px;
        }
        @media (max-width: 991px) {
            .column-28 {
            width: 100%;
            }
        }
        .div-208 {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            align-items: center;
        }
        @media (max-width: 991px) {
            .div-208 {
            max-width: 100%;
            margin-top: 40px;
            }
        }
        .div-209 {
            align-self: stretch;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        @media (max-width: 991px) {
            .div-209 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .div-210 {
            display: flex;
            flex-grow: 1;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
        }
        .div-211 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-211 {
            white-space: initial;
            }
        }
        .div-212 {
            color: var(--3rd-color, #fff8ee);
            align-self: stretch;
            margin-top: 25px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-212 {
            white-space: initial;
            }
        }
        .div-213 {
            display: flex;
            flex-grow: 1;
            flex-basis: 0%;
            flex-direction: column;
            align-items: center;
        }
        .div-214 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-214 {
            white-space: initial;
            }
        }
        .div-215 {
            color: var(--3rd-color, #fff8ee);
            align-self: stretch;
            margin-top: 25px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-215 {
            white-space: initial;
            }
        }
        .div-216 {
            align-self: stretch;
            display: flex;
            margin-top: 14px;
            width: 100%;
            justify-content: space-between;
            gap: 20px;
        }
        @media (max-width: 991px) {
            .div-216 {
            max-width: 100%;
            flex-wrap: wrap;
            }
        }
        .div-217 {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 15px;
        }
        @media (max-width: 991px) {
            .div-217 {
            justify-content: center;
            }
        }
        .img-48 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--3rd-color, #fff8ee);
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .div-218 {
            color: var(--3rd-color, #fff8ee);
            margin: auto 0;
            font: 400 12px Inter, sans-serif;
        }
        .img-49 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--3rd-color, #fff8ee);
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .div-219 {
            color: var(--3rd-color, #fff8ee);
            align-self: start;
            white-space: nowrap;
            font: 400 12px Inter, sans-serif;
        }
        @media (max-width: 991px) {
            .div-219 {
            white-space: initial;
            }
        }
        .div-220 {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 15px;
        }
        @media (max-width: 991px) {
            .div-220 {
            justify-content: center;
            }
        }
        .img-50 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--3rd-color, #fff8ee);
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .div-221 {
            color: var(--3rd-color, #fff8ee);
            margin: auto 0;
            font: 400 12px Inter, sans-serif;
        }
        .img-51 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--3rd-color, #fff8ee);
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .div-222 {
            color: var(--3rd-color, #fff8ee);
            align-self: start;
            white-space: nowrap;
            font: 400 12px Inter, sans-serif;
        }
        @media (max-width: 991px) {
            .div-222 {
            white-space: initial;
            }
        }
        .div-223 {
            display: flex;
            margin-top: 17px;
            width: 593px;
            max-width: 100%;
            justify-content: space-between;
            gap: 20px;
        }
        @media (max-width: 991px) {
            .div-223 {
            flex-wrap: wrap;
            }
        }
        .div-224 {
            color: var(--link-color, #4bff3c);
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-224 {
            white-space: initial;
            }
        }
        .div-225 {
            color: var(--link-color, #4bff3c);
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-225 {
            white-space: initial;
            }
        }
        .column-29 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 33%;
            margin-left: 20px;
        }
        @media (max-width: 991px) {
            .column-29 {
            width: 100%;
            }
        }
        .div-226 {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
        }
        @media (max-width: 991px) {
            .div-226 {
            margin-top: 40px;
            }
        }
        .div-227 {
            color: var(--3rd-color, #fff8ee);
            align-self: center;
            white-space: nowrap;
            font: 700 35px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-227 {
            white-space: initial;
            }
        }
        .div-228 {
            color: var(--3rd-color, #fff8ee);
            align-self: stretch;
            margin-top: 25px;
            white-space: nowrap;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-228 {
            white-space: initial;
            }
        }
        .div-229 {
            align-self: center;
            display: flex;
            margin-top: 14px;
            align-items: flex-start;
            justify-content: space-between;
            gap: 15px;
        }
        @media (max-width: 991px) {
            .div-229 {
            justify-content: center;
            }
        }
        .img-52 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--3rd-color, #fff8ee);
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .div-230 {
            color: var(--3rd-color, #fff8ee);
            margin: auto 0;
            font: 400 12px Inter, sans-serif;
        }
        .img-53 {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
            fill: var(--3rd-color, #fff8ee);
            overflow: hidden;
            align-self: stretch;
            max-width: 100%;
        }
        .div-231 {
            color: var(--3rd-color, #fff8ee);
            align-self: start;
            white-space: nowrap;
            font: 400 12px Inter, sans-serif;
        }
        @media (max-width: 991px) {
            .div-231 {
            white-space: initial;
            }
        }
        .div-232 {
            color: var(--link-color, #4bff3c);
            align-self: center;
            margin-top: 17px;
            white-space: nowrap;
            font: 400 18px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-232 {
            white-space: initial;
            }
        }
        .div-233 {
            color: var(--3rd-color, #fff8ee);
            white-space: nowrap;
            background-color: var(--second-color, #2a435d);
            align-self: stretch;
            width: 100%;
            justify-content: center;
            align-items: center;
            padding: 41px 60px;
            font: 700 20px Roboto, sans-serif;
        }
        @media (max-width: 991px) {
            .div-233 {
            white-space: initial;
            max-width: 100%;
            padding: 0 20px;
            }
        }
    </style>
    <link rel="stylesheet" href="stisla/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stisla/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>
    <div class="div">
      <div class="div-2">
        <div class="div-3">
          <div class="col-lg-4">
            <div class="text-white">
                <i class="fas fa-clock"></i>
                11.00 AM - 9.30 PM
            </div>
          </div>
          <div class="col-lg-8">
            <div class="text-white">
                <i class="fas fa-phone"></i>
                +62 87873868409
            </div>
          </div>
        </div>
      </div>
      <div class="div-9">
        <div class="div-10">
          <img
            loading="lazy"
            srcset="..."
            class="img-2"
          />
          <div class="div-11">
            <div class="div-12">HOME</div>
            <div class="div-13">ABOUT</div>
            <div class="div-14">ITEMS</div>
            <div class="div-15">CONTACT</div>
            {{-- <div class="div-20">LOGIN</div> --}}
          </div>
        </div>
      </div>
      <div class="div-21">
        <div class="div-22">
          <div class="column">
            <div class="div-23">
              <div class="div-24">Best In Town</div>
              <div class="div-25">
                <span style="color: rgba(42, 67, 93, 1)">ENJOY OUR CHICKEN</span>
                <span style="color: rgba(204, 51, 51, 1)">BURGER</span>
                <span style="color: rgba(42, 67, 93, 1)">FAST FOOD</span>
              </div>
              <div class="div-26">
                <div class="div-27">Order Now</div>
                <div class="div-28">Price : $10.50</div>
              </div>
            </div>
          </div>
          <div class="column-2">
            <img
              loading="lazy"
              srcset="..."
              class="img-5"
            />
          </div>
        </div>
      </div>
      <div class="div-29">
        <img
          loading="lazy"
          src="asset/bihun_goreng.jpg"
          class="img-6"
        />
        <div class="div-30">
          <div class="div-31"></div>
          <div class="div-32"></div>
          <div class="div-33"></div>
          <div class="div-34"></div>
        </div>
      </div>
      <div class="div-35">Food Items</div>
      <div class="div-36">Makanan favorite</div>
      <div class="row">
        <div class="col-lg-3">
            <img
              loading="lazy"
              src="https://th.bing.com/th/id/R.d9ea476907e3c368b3b3c440920a55f2?rik=Lj0m5FEvLln5Uw&riu=http%3a%2f%2fpeckishme.com%2fwp-content%2fuploads%2f2015%2f12%2fNasi-goreng.jpg&ehk=b%2fxot1XboxflYvrkFG7%2b3AULkXPkcVEj3vcWSK3%2bpy4%3d&risl=&pid=ImgRaw&r=0"
            width="100%"
              />
        </div>
        <div class="col-lg-3">
            <img
              loading="lazy"
              src="https://th.bing.com/th/id/R.d9ea476907e3c368b3b3c440920a55f2?rik=Lj0m5FEvLln5Uw&riu=http%3a%2f%2fpeckishme.com%2fwp-content%2fuploads%2f2015%2f12%2fNasi-goreng.jpg&ehk=b%2fxot1XboxflYvrkFG7%2b3AULkXPkcVEj3vcWSK3%2bpy4%3d&risl=&pid=ImgRaw&r=0"
              width="100%"
              />
        </div>
        <div class="col-lg-3">
            <img
              loading="lazy"
              src="https://th.bing.com/th/id/R.d9ea476907e3c368b3b3c440920a55f2?rik=Lj0m5FEvLln5Uw&riu=http%3a%2f%2fpeckishme.com%2fwp-content%2fuploads%2f2015%2f12%2fNasi-goreng.jpg&ehk=b%2fxot1XboxflYvrkFG7%2b3AULkXPkcVEj3vcWSK3%2bpy4%3d&risl=&pid=ImgRaw&r=0"
            width="100%"
              />
        </div>
        <div class="col-lg-3">
            <img
              loading="lazy"
              src="https://th.bing.com/th/id/R.d9ea476907e3c368b3b3c440920a55f2?rik=Lj0m5FEvLln5Uw&riu=http%3a%2f%2fpeckishme.com%2fwp-content%2fuploads%2f2015%2f12%2fNasi-goreng.jpg&ehk=b%2fxot1XboxflYvrkFG7%2b3AULkXPkcVEj3vcWSK3%2bpy4%3d&risl=&pid=ImgRaw&r=0"
            width="100%"
              />
        </div>
      </div>
      <div class="div-38">
        <div class="div-39">
          <div class="column-3">
            <img
              loading="lazy"
              srcset="..."
              class="img-12"
            />
          </div>
          <div class="column-4">
            <div class="div-40">
              <div class="div-41">RICH & HEALTHY</div>
              <div class="div-42">
                Highest quality artisangrains, proteins & seasonal ingredients
              </div>
              <div class="div-43">
                Righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure of the moment, so blinded by
                desires, that they cannot foresee.
              </div>
              <div class="div-44">
                <div class="div-45">
                  <div class="column-5">
                    <div class="div-46">
                      <div class="div-47">
                        <div class="div-48">
                          <img
                            loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/54f45443563c65eae3af2a6db5bef4a50169f2a6b12fda5b47d18a1f3deb81ce?"
                            class="img-13"
                          />
                          <img
                            loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/54f45443563c65eae3af2a6db5bef4a50169f2a6b12fda5b47d18a1f3deb81ce?"
                            class="img-14"
                          />
                          <img
                            loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/54f45443563c65eae3af2a6db5bef4a50169f2a6b12fda5b47d18a1f3deb81ce?"
                            class="img-15"
                          />
                        </div>
                        <div class="div-49">
                          Simple and easy to distinguish
                          <br />
                          <br />
                          Pleasure of the momentblinded desire
                          <br />
                          <br />
                          Able to do what we like best
                        </div>
                      </div>
                      <div class="div-50">Reade More</div>
                    </div>
                  </div>
                  <div class="column-6">
                    <img
                      loading="lazy"
                      srcset="..."
                      class="img-16"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-51">Bigg Offer</div>
      <div class="div-52">For in this week, take your food, buy your best one.</div>
      <div class="div-53">
        <div class="div-54">
          <div class="column-7">
            <img
              loading="lazy"
              srcset="..."
              class="img-17"
            />
          </div>
          <div class="column-8">
            <img
              loading="lazy"
              srcset="..."
              class="img-18"
            />
          </div>
          <div class="column-9">
            <img
              loading="lazy"
              srcset="..."
              class="img-19"
            />
          </div>
        </div>
      </div>
      <div class="div-55">SPECIALS</div>
      <div class="div-56">Check out our menu</div>
      <div class="div-57">
        Demoralized by the charms of pleasure of the moment so blinded except to
        some advantage.
      </div>
      <div class="div-58">
        <div class="div-59">Makanan</div>
        <div class="div-60"></div>
        <div class="div-61">Optional</div>
        <div class="div-62"></div>
        <div class="div-63">DINNER</div>
        <div class="div-64"></div>
        <div class="div-65">STARTERS</div>
        <div class="div-66"></div>
        <div class="div-67">Minuman</div>
      </div>
      <div class="div-68">
        <div class="div-69">
          <div class="column-10">
            <div class="div-70">
              <div class="div-71">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/059fa07c03d21f996d53574fdff0e419a0f9c6e9dad8d6a1a58247d7be28df04?"
                  class="img-20"
                />
                <img
                  loading="lazy"
                  srcset="..."
                  class="img-21"
                />
              </div>
              <div class="div-72">
                <div class="div-73">VIEW ALL MENU</div>
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/7f2712bffe85d2f04b2588964b43a6a5f36e4f056622111df590c1716683d937?"
                  class="img-22"
                />
              </div>
            </div>
          </div>
          <div class="column-11">
            <div class="div-74">
              <div class="div-75">
                <div class="div-76">
                  <div class="column-12">
                    <div class="div-77">
                      <div class="div-78">Nasi Goreng</div>
                      <div class="div-79">Resep</div>
                      <div class="div-80"></div>
                      <div class="div-81">Nasi Goreng Bakso</div>
                      <div class="div-82">Resep</div>
                      <div class="div-83"></div>
                      <div class="div-84">Nasi Goreng Telur</div>
                      <div class="div-85">Resep</div>
                      <div class="div-86"></div>
                      <div class="div-87">Kwetiaw</div>
                    </div>
                  </div>
                  <div class="column-13">
                    <div class="div-88">
                      <div class="div-89">$55</div>
                      <div class="div-90">$40</div>
                      <div class="div-91">$45</div>
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/b0a5c785f7fd46c2f7385f63ca8d857646214c8f4b6c1fb595aba4772ce9f8ab?"
                        class="img-23"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="div-92">
                <div class="div-93">
                  <div class="div-94">
                    Atlantic cod fillet, chips, salad, tartare, lemon.
                  </div>
                  <div class="div-95"></div>
                </div>
                <div class="div-96">$35</div>
              </div>
              <div class="div-97">
                <div class="div-98">
                  <div class="div-99">Mie Goreng</div>
                  <div class="div-100">
                    Marinated seabass with sour saucel & coriander on bread.
                  </div>
                  <div class="div-101"></div>
                </div>
                <div class="div-102">$95</div>
              </div>
              <div class="div-103">
                <div class="div-104">
                  <div class="div-105">Mie Kuah</div>
                  <div class="div-106">
                    Atlantic cod fillet, chips, salad, tartare, lemon.
                  </div>
                  <div class="div-107"></div>
                  <div class="div-108">Capcay</div>
                  <div class="div-109">
                    Chilled tomato, cucumber, garlic, red pepper soup.
                  </div>
                  <div class="div-110"></div>
                </div>
                <div class="div-111">
                  <div class="div-112">$120</div>
                  <div class="div-113">$29</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-114">SPECIALS MANU FOR ALL TIME</div>
      <div class="div-115">
        <div class="div-116">
          <img
            loading="lazy"
            srcset="..."
            class="img-24"
          />
          <div class="div-117">Burger</div>
        </div>
        <div class="div-118">
          <img
            loading="lazy"
            srcset="..."
            class="img-25"
          />
          <div class="div-119">Fried chicken</div>
        </div>
        <div class="div-120">
          <img
            loading="lazy"
            srcset="..."
            class="img-26"
          />
          <div class="div-121">
            Doner with
            <br />
            Grilled Chicken
          </div>
        </div>
        <div class="div-122">
          <img
            loading="lazy"
            srcset="..."
            class="img-27"
          />
          <div class="div-123">Pizza</div>
        </div>
        <div class="div-124">
          <img
            loading="lazy"
            srcset="..."
            class="img-28"
          />
          <div class="div-125">Hot Dogs</div>
        </div>
        <div class="div-126">
          <img
            loading="lazy"
            srcset="..."
            class="img-29"
          />
          <div class="div-127">
            Chicken
            <br />
            Skewers
          </div>
        </div>
      </div>
      <div class="div-128">
        <div class="div-129">
          <div class="column-14">
            <div class="div-130">
              <img
                loading="lazy"
                srcset="..."
                class="img-30"
              />
              <div class="div-131">Greek Salad</div>
            </div>
          </div>
          <div class="column-15">
            <div class="div-132">
              <img
                loading="lazy"
                srcset="..."
                class="img-31"
              />
              <div class="div-133">Dahi Puri</div>
            </div>
          </div>
          <div class="column-16">
            <div class="div-134">
              <img
                loading="lazy"
                srcset="..."
                class="img-32"
              />
              <div class="div-135">
                Ice cream with
                <br />
                Chocolate
              </div>
            </div>
          </div>
          <div class="column-17">
            <div class="div-136">
              <img
                loading="lazy"
                srcset="..."
                class="img-33"
              />
              <div class="div-137">
                Cocktail
                <br />
                Glasses
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-138">OUR RESTAURANT</div>
      <div class="div-139">
        <div class="div-140">
          <div class="column-18">
            <img
              loading="lazy"
              srcset="..."
              class="img-34"
            />
          </div>
          <div class="column-19">
            <img
              loading="lazy"
              srcset="..."
              class="img-35"
            />
          </div>
          <div class="column-20">
            <div class="div-141">
              <div class="div-142">For every specialoccasion there’s heritaste</div>
              <div class="div-143">
                Indignation and dislike men who are so beguiled demoralized by the
                charms of pleasure of the moment. Success Story.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-144">
        <img
          loading="lazy"
          srcset="..."
          class="img-36"
        />
        <div class="div-145">
          <div class="div-146">
            <img
              loading="lazy"
              srcset="..."
              class="img-37"
            />
          </div>
          <div class="div-147">
            <img
              loading="lazy"
              srcset="..."
              class="img-38"
            />
          </div>
        </div>
        <div class="div-148">
          <div class="div-149">Success Story</div>
          <div class="div-150">
            Certain circumstances and owing to the claims of duty obligations of
            business it will frequently.
          </div>
          <div class="div-151">
            <div class="div-152">Read More</div>
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/ed277a96498ac26e18d622c5deec9c609b59ab8363d12e3c665c778962c8491a?"
              class="img-39"
            />
          </div>
          <div class="div-153">Passionate Chefs</div>
          <div class="div-154">
            Duty or the obligations of business it frequently occur pleasures have
            to be repudiated.
          </div>
          <div class="div-155">
            <div class="div-156">Read More</div>
            <img
              loading="lazy"
              src="https://th.bing.com/th/id/R.46016b7f57e243eee6a48cf54f018d49?rik=oBhcfnfOnb%2bfWA&riu=http%3a%2f%2fwww.the350degreeoven.com%2fwp-content%2fuploads%2f2014%2f09%2fDSC_0423-3.jpg&ehk=UQrXYlY9qBLg2CqGiUPl3j%2fzMtWxc9HmLcTwfh%2fgGag%3d&risl=&pid=ImgRaw&r=0"
              class="img-40"
            />
          </div>
        </div>
      </div>
      <div class="div-157">
        <div class="div-158">
          <div class="column">
            <div class="div-159">
              <div class="div-160">Delivery</div>
              <div class="div-161">
                <span style="color: rgba(42, 67, 93, 1)">
                  A Moments Of
                  <br />
                </span>
                <span style="color: rgba(204, 51, 51, 1)">
                  Delivered On Right Time & Place
                  <br />
                </span>
              </div>
              <div class="div-162">
                Food Khan is a restaurant, bar and coffee roastery located on a busy
                corner site in Farringdon's Exmouth Market. With glazed frontage on
                two sides of the building, overlooking the market and a bustling
                London inteon.
              </div>
              <div class="div-163">
                <div class="div-164">
                  <div class="div-165">
                    <div class="div-166">Delivery Order</div>
                    <div class="div-167">+880 1630 225 015</div>
                  </div>
                  <img
                    loading="lazy"
                    srcset="..."
                    class="img-41"
                  />
                </div>
                <div class="div-168">Order Now</div>
              </div>
            </div>
          </div>
          <div class="column-21">
            <img
              loading="lazy"
              srcset="..."
              class="img-42"
            />
          </div>
        </div>
      </div>
      <div class="div-169">Why We are the best</div>
      <div class="div-170">
        <div class="div-171">
          <div class="column-22">
            <div class="div-172">
              <div class="div-173">
                <img
                  loading="lazy"
                  srcset="..."
                  class="img-43"
                />
                <div class="div-174">1</div>
              </div>
              <div class="div-175">Passionate Chefs</div>
              <div class="div-176">
                Beguiled and demoralized by all get charms pleasure the moments ever
                so blinded by desire.
              </div>
              <div class="div-177">Read More</div>
            </div>
          </div>
          <div class="column-23">
            <div class="div-178">
              <div class="div-179">
                <img
                  loading="lazy"
                  srcset="..."
                  class="img-44"
                />
                <div class="div-180">2</div>
              </div>
              <div class="div-181">100 % Fresh Foods</div>
              <div class="div-182">
                Beguiled and demoralized by all get charms pleasure the moments ever
                so blinded by desire.
              </div>
              <div class="div-183">Read More</div>
            </div>
          </div>
          <div class="column-24">
            <div class="div-184">
              <div class="div-185">
                <img
                  loading="lazy"
                  srcset="..."
                  class="img-45"
                />
                <div class="div-186">3</div>
              </div>
              <div class="div-187">Memorable Ambience</div>
              <div class="div-188">
                Beguiled and demoralized by all get charms pleasure the moments ever
                so blinded by desire.
              </div>
              <div class="div-189">Read More</div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-190">
        <div class="div-191">
          <div class="column-25"><div class="div-192"></div></div>
          <div class="column-26">
            <div class="div-193">
              <div class="div-194">Testimonial</div>
              <div class="div-195">
                <span style="color: rgba(42, 67, 93, 1)">Review</span>
                <span style="color: rgba(204, 51, 51, 1)">form our guests</span>
              </div>
              <img
                loading="lazy"
                srcset="..."
                class="img-46"
              />
              <div class="div-196">Bernadette R. Martin</div>
              <div class="div-197">
                Also very good and so was the service. I had the mushroom risotto
                with scallops which was awesome. My wife had a burger over greens
                ...
              </div>
              <img
                loading="lazy"
                src="asset/bihun_goreng.jpg"
                class="img-47"
              />
            </div>
          </div>
          <div class="column-27"><div class="div-198"></div></div>
        </div>
      </div>
      <div class="div-199">
        <div class="div-200"></div>
        <div class="div-201"></div>
        <div class="div-202"></div>
        <div class="div-203"></div>
      </div>
      <div class="div-204">Our Branch</div>
      <div class="div-205">
        <div class="div-206">
          <div class="div-207">
            <div class="column-28">
              <div class="div-208">
                <div class="div-209">
                  <div class="div-210">
                    <div class="div-211">Robert Food</div>
                    <div class="div-212">1986 Hilltop DriveBorger, TX 79007</div>
                  </div>
                  <div class="div-213">
                    <div class="div-214">Mark A. Reed Food</div>
                    <div class="div-215">4877 Rose AvenueNew Orleans, LA 70112</div>
                  </div>
                </div>
                <div class="div-216">
                  <div class="div-217">
                    <img
                      loading="lazy"
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f27aeb73562d377596ac0648a7c774a9fe13d068e204a1e1bd12de498dc0ac9?"
                      class="img-48"
                    />
                    <div class="div-218">7.30 AM - 9.30 PM</div>
                    <img
                      loading="lazy"
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/b80303eb52b2f47cdaf6b751833edcb6f6603e18a4f5fd76a37f0c4512dda8ad?"
                      class="img-49"
                    />
                    <div class="div-219">+880 1630-225015</div>
                  </div>
                  <div class="div-220">
                    <img
                      loading="lazy"
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f27aeb73562d377596ac0648a7c774a9fe13d068e204a1e1bd12de498dc0ac9?"
                      class="img-50"
                    />
                    <div class="div-221">7.30 AM - 9.30 PM</div>
                    <img
                      loading="lazy"
                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/b80303eb52b2f47cdaf6b751833edcb6f6603e18a4f5fd76a37f0c4512dda8ad?"
                      class="img-51"
                    />
                    <div class="div-222">+880 1630-225015</div>
                  </div>
                </div>
                <div class="div-223">
                  <div class="div-224">Click to View Google Map</div>
                  <div class="div-225">Click to View Google Map</div>
                </div>
              </div>
            </div>
            <div class="column-29">
              <div class="div-226">
                <div class="div-227">Karie K. Hill Food</div>
                <div class="div-228">1509 Peaceful LaneCleveland, OH 44115</div>
                <div class="div-229">
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f27aeb73562d377596ac0648a7c774a9fe13d068e204a1e1bd12de498dc0ac9?"
                    class="img-52"
                  />
                  <div class="div-230">7.30 AM - 9.30 PM</div>
                  <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/b80303eb52b2f47cdaf6b751833edcb6f6603e18a4f5fd76a37f0c4512dda8ad?"
                    class="img-53"
                  />
                  <div class="div-231">+880 1630-225015</div>
                </div>
                <div class="div-232">Click to View Google Map</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-233">Copyright © 2023 | Littledev</div>
    </div>
</body>
</html>

