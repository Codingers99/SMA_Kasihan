<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .parent {
            margin: 2%;
            width: 500px;
            height: 20%;
            padding: 15px;
            background: grey;
            color: white;
            display: block;
        }

        .text-container {
            border: 1px solid;
            width: 100%;
            height: 100%;
        }

        .text {
            font-size: 10px;
            display: block;
        }

        body {
            background: #33A;
        }

    </style>
</head>
<body>
    <div class="parent">
        <div class="text-container" data-id=1>
            <span class="text">
            This Text is a bit longer
            and should be wrapped correctly
            </span>
        </div>
    </div>

    <div class="parent">
        <div class="text-container" data-id=2>
            <span class="text">
            This text akjfakfkaflalflalflafafafjafjaj akjfakfkaflalflalflafafafjafjaj akjfakfkaflalflalflafafafjafjaj
            </span>
        </div>
    </div>
    
    <script>
        const isOverflown = ({ clientWidth, clientHeight, scrollWidth, scrollHeight }) => (scrollWidth > clientWidth) || (scrollHeight > clientHeight)


        const resizeText = ({ element, elements, minSize = 10, maxSize = 512, step = 1, unit = 'px' }) => {
        (elements || [element]).forEach(el => {
            let i = minSize
            let overflow = false

                const parent = el.parentNode

            while (!overflow && i < maxSize) {
                el.style.fontSize = `${i}${unit}`
                overflow = isOverflown(parent)

            if (!overflow) i += step
            }

            // revert to last state where no overflow happened
            el.style.fontSize = `${i - step}${unit}`
        })
        }


        resizeText({
        elements: document.querySelectorAll('.text'),
        step: 0.5
        })


    </script>
</body>
</html>