<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shops</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .custom-dropdown {
            position: relative;
            display: inline-flex;
        }

        .search-results {
            display: none;
            position: absolute;
            list-style-type: left;
            padding: 0;
            margin: 0;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #fff;
            max-height: 300px;
            overflow-y: auto;
            box-shadow: 0 5px 12px 2px rgba(70, 70, 70, 0.45);
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;

            &.show {
                display: inline-flex;
                flex-direction: column;
            }

            .search-item {
                padding: 5px 12px;
                border-bottom: 1px solid #ddd;
                cursor: pointer;
                text-transform: capitalize;

                &:last-child {
                    border-bottom-width: 0;
                }

                &:hover {
                    background-color: #c0c0c0;
                }
            }
        }

        #location {
            text-transform: capitalize;
        }
    </style>
</head>

<body>
    <nav class="main-nav">
        <div class="company-logo">
            <span class="logo">Coffee Shops</span>
        </div>
    </nav>
    <section class="main-section">
        <h2 class="header-text">Find your cozy coffee place</h2>
        <p class="secondary-text">Search for low prices,the right atmosphere, location and much more</p>
        <div class="search-container">
            <form class="search-form">
                <div class="form-row">
                    <div class="custom-dropdown">
                        <input type="text" name="location" id="location" class="form-control location-input" placeholder="Where?" onfocus="showResults()">
                        <ul class="search-results">
                            <li class="search-item" onclick="chooseLocation('kathmandu')">kathmandu</li>
                            <li class="search-item" onclick="chooseLocation('lalitpur')">lalitpur</li>
                            <li class="search-item" onclick="chooseLocation('bhaktapur')">bhaktapur</li>
                            <li class="search-item" onclick="chooseLocation('pokhara')">pokhara</li>
                            <li class="search-item" onclick="chooseLocation('dhulikhel')">dhulikhel</li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="popular-shops">
        <h2 class="header-text">Popular Coffee Shops</h2>
        <ul class="shop-list">
            <li class="shop-item">Riku's Cafe</li>
            <li class="shop-item">Morning Cafe and Bakery</li>
            <li class="shop-item">Vikings Cafe</li>
            <li class="shop-item">Hamro Cafe and Bakery</li>
            <li class="shop-item">Cafination</li>
        </ul>
    </section>

</body>

<script>
    const showResults = () => {
        const results = document.querySelector('.search-results');
        if (!results.classList.contains('show')) {
            results.classList.add('show')
        }
    }

    document.addEventListener('click', (e) => {
        let classArr = Array.from(e.target.classList)
        if (classArr.indexOf('location-input') == -1 &&
            classArr.indexOf('search-item') == -1) {
            hideResults()
        }
    })


    const hideResults = () => {
        const results = document.querySelector('.search-results');
        if (results.classList.contains('show')) {
            results.classList.remove('show')
        }
    }

    const chooseLocation = (location) => {
        const input = document.getElementById('location');
        input.value = location;
        hideResults();
    }
</script>

</html>