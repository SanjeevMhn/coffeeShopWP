<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shops</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">

    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-size: 62.5%;
        }

        body{
            font-size: 1.6rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .bg-img{
            position: relative;
            img{
                position: absolute;
                height: 100%;
                width: 100%;
                object-fit: cover;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
            }
        }

        ul{
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .custom-dropdown {
            position: relative;
            display: flex;
            .icon-container{
                position: absolute;
                top: 50%;
                right: 10px;
                transform: translateY(-50%);
                height: 25px; 
                width: 25px; 
                display: flex;
                align-items: center;
                justify-content: center;

                svg{
                    height: 70%;
                    width: 70%;
                    object-fit: cover;
                }
            }
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
                font-size: 2rem;

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

        .logo{
            font-size: 2.8rem;
        }

        .logo,
        .header-text{
            font-family: "Oleo Script", system-ui;
            font-weight: 400;
            font-style: normal;
        }

        .header-text{
            font-size: 3.8rem;
            margin: 0;
        }

        .secondary-text{
            font-size: 1.8rem;
        }

        .shop-item{
            font-size: 2.2rem;
        }

        input#location,
        .search-item{
            font-size: 2rem;
        }

        input#location{
            padding: 0.5rem 4rem 0.5rem 1rem;
            border-radius: 0.8rem;
        }

        .main-nav{
            display: flex;
            justify-content: space-between;
            .nav-list{
                display: flex;
                align-items: center;
                gap: 2rem;
                li{
                    font-size: 1.8rem;
                    font-weight: 600;
                }
            }
        }

        .main-section{
            height: calc(100vh - 8rem);
            display: flex;
            flex-direction: column;
            justify-content: center;
            .header-text{
                font-size: 5.5rem;
                width: 50%;
                padding-bottom: 1.5rem; 
                line-height: 1;
            }
            .secondary-text{
                font-size: 2.5rem;
                line-height: 1.15;
                width: 50%;
                padding-bottom: 1.5rem;
            }
        }

        .popular-shops,
        .search-section{
            .header-text{
                text-align: center;
                padding-bottom: 1.5rem;
            }

            .search-form{
                width: 100%;
                .custom-dropdown{
                    width: 40%;
                    margin: 0 auto;
                    input{
                        width: 100%;
                    }
                }
            }
        }

        .btn-primary,
        .btn-outline-primary{
            display: inline;
            font-size: 2.1rem;
            padding: 1rem 2rem;
            border-radius: 100vh;
            border-width: 0;
            outline: unset;
            cursor: pointer;
        }

        .search-container{
            display: flex;
            gap: 1.2rem; 
        }

        .btn-primary{
            background: #d74544;
            color: #fff;
        }
        .btn-outline-primary{
            border: 1px solid #d74544;
            color:  #d74544;
            background: #fff;
        }

        .wrapper{
            padding: 1.5rem 0;
        }

        @media screen and (min-width: 130px){
            .wrapper{
                max-width: 130rem;
                margin: 0 auto;
            }
        }


    </style>
</head>

<body>
    <nav class="main-nav wrapper">
        <div class="company-logo">
            <span class="logo">Coffee Shops</span>
        </div>
        <ul class="nav-list">
            <li>Home</li>
            <li>Blog</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </nav>
    <section class="main-section wrapper">
        <h2 class="header-text">Find your cozy coffee place</h2>
        <p class="secondary-text">Search for low prices,the right atmosphere, location and much more</p>
        <div class="search-container">
            <button class="btn-primary" type="button">
                Search
            </button>
            <button class="btn-outline-primary" type="button">
                Explore
            </button>
        
        </div>
    </section>

    <section class="popular-shops wrapper">
        <h2 class="header-text">Popular Coffee Shops</h2>
        <ul class="shop-list">
        </ul>
    </section>

    <section class="search-section wrapper">
        <h2 class="header-text">Search</h2>
        <form class="search-form">
            <div class="custom-dropdown">
                <input type="text" name="location" id="location" class="form-control location-input" placeholder="Location..." onfocus="showResults()">
                <span class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                </span>
                <ul class="search-results">
                </ul>
            </div>
        </form>
    </section>

    <footer class="main-footer wrapper">
        <div class="company-logo">
            <span class="logo">Coffee Shops</span>
        </div>
    </footer>
</body>

<script>

    let locations = [
        'kathmandu',
        'lalitpur',
        'bhaktapur',
        'pokhara',
        'dhulikhel'
    ]

    let popularCoffeeShops = [
        {
            id: 0,
            name: 'Riku\'s Cafe',
            location: 'kathmandu'
        },
        {
            id: 1,
            name: 'Morning Cafe and Bakery',
            location: 'kathmandu'
        },
        {
            id: 2,
            name: 'Vikings Cafe',
            location: 'lalitpur'
        },
        {
            id: 3,
            name: 'Hamro Cafe and Bakery',
            location: 'pokhara'
        },
        {
            id: 4,
            name: 'Cafination',
            location: 'dhulikhel'
        },
        {
            id: 5,
            name: 'Get set Coffee',
            location: 'dhulikhel'
        },
        {
            id: 6,
            name: 'Lake side Coffee',
            location: 'pokhara'
        },
    ]

    document.addEventListener('DOMContentLoaded',() => {
        setLocations();   
        setPopularShops();
    })

    const setLocations = () => {
        let searchList = document.querySelector('.search-results');
        locations.forEach(location => {
            let li = document.createElement('LI');
            li.classList.add('search-item');
            li.innerHTML = location

            searchList.appendChild(li);
        })
        let searchitems = Array.from(document.querySelectorAll('.search-item'));
        searchitems.forEach(item => {
            item.addEventListener('click',() => {
                chooseLocation(item.innerHTML);
            })
        })
    }
    
    const setPopularShops = () => {
        let shopList = document.querySelector('.shop-list');
        popularCoffeeShops.forEach((shop) => {
            let li = document.createElement('LI');
            li.classList.add('shop-item');
            li.innerHTML = shop.name
            shopList.appendChild(li)
        })
    }

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

    const input = document.getElementById('location');

    const debounce = (callback,wait) => {
        let timeoutId;
        return (args) => {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => {
                callback(args);
            },wait)
        }
    }

    const onSearch = debounce((input) => { 
        let value = input.target.value
        let similarLocations = locations.filter((location) => location.toLowerCase().includes(value.toLowerCase()));

        let searchList = document.querySelector('.search-results');
        searchList.innerHTML = '';
        similarLocations.forEach(location => {
            let li = document.createElement('LI');
            li.classList.add('search-item');
            li.innerHTML = location

            searchList.appendChild(li);
        })
        let searchitems = Array.from(document.querySelectorAll('.search-item'));
        searchitems.forEach(item => {
            item.addEventListener('click',() => {
                chooseLocation(item.innerHTML);
            })
        })
    },800)

    input.addEventListener('input',onSearch)
</script>

</html>