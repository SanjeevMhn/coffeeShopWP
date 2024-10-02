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

let latestBlogs = [
    {
        id: 0,
        name: 'Barista Training',
    },
    {
        id: 1,
        name: 'Growing Coffee Culture in Nepal',
    },
    {
        id: 2,
        name: 'Types of coffees',
    },
    {
        id: 3,
        name: 'Cafinated',
    },
    {
        id: 4,
        name: 'Brewing your own coffee at home',
    },
]

document.addEventListener('DOMContentLoaded', () => {
    // setLocations();
    setPopularShops();
    setLatestBlogs();
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
        item.addEventListener('click', () => {
            chooseLocation(item.innerHTML);
        })
    })
}

const setPopularShops = () => {
    let shopList = document.querySelector('.shop-list');
    popularCoffeeShops.forEach((shop) => {
        let li = document.createElement('LI');
        li.classList.add('shop-item');
        let imgContainer = document.createElement('DIV');
        imgContainer.classList.add('img-container');
        let img = document.createElement('IMG');
        img.setAttribute('src',"");
        imgContainer.appendChild(img);
        let shopname = document.createElement('DIV');
        shopname.classList.add('shop-name');
        shopname.innerHTML = shop.name;
        let shoplocation = document.createElement('DIV');
        shoplocation.classList.add('shop-location');
        shoplocation.innerHTML = shop.location;

        li.appendChild(imgContainer);
        li.appendChild(shopname);
        li.appendChild(shoplocation);

        shopList.appendChild(li)
    })
}

const setLatestBlogs = () => {
    let blogList = document.querySelector('.blog-list');
    latestBlogs.forEach((blog) => {
        let li = document.createElement('LI');
        li.classList.add('blog-item');
        let imgContainer = document.createElement('DIV');
        imgContainer.classList.add('img-container');
        let img = document.createElement('IMG');
        img.setAttribute('src',"");
        imgContainer.appendChild(img);
        let blogname = document.createElement('DIV');
        blogname.classList.add('blog-name');
        blogname.innerHTML = blog.name;

        li.appendChild(imgContainer);
        li.appendChild(blogname);

        blogList.appendChild(li)
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

const debounce = (callback, wait) => {
    let timeoutId;
    return (args) => {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
            callback(args);
        }, wait)
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
        item.addEventListener('click', () => {
            chooseLocation(item.innerHTML);
        })
    })
}, 800)

input.addEventListener('input', onSearch)