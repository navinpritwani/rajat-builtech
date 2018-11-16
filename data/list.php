<?php if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
        header('Access-Control-Allow-Headers: token, Content-Type');
        header('Access-Control-Max-Age: 1728000');
        header('Content-Length: 0');
        header('Content-Type: text/plain');
        die();
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

 echo '[
{
"id": 1,
"title": "Rajat Prime",
"address": "C-1/74, Sector-7 Near Govind Sarang Complex, Shreeji kalptaru Colony, Amlihdih",
"price": "Rajat Prime",
"thumbnail": "imgs/rajat-prime-thumb.jpg",
"verified": false,
"latitude": 21.2224488,
"longitude": 81.6700472,
"link": "rajat-prime.html"
}
,
{
"id": 2,
"title": "Avenue 144",
"address": "C-1/74, Sector-7 Near Govind Sarang Complex, New Rajendra Nagar",
"price": "Avenue 144",
"thumbnail": "imgs/avenue-thumb.jpg",
"verified": false,
"latitude": 21.2240438,
"longitude": 81.6525704,
"link": "avenue-144.html"
},
{
    "id": 3,
    "title": "Centrum",
    "address": "Bhatagaon, Raipur, Chhattisgarh 492013, India",
    "price": "Centrum",
    "thumbnail": "imgs/centrum-thumb.jpg",
    "verified": false,
    "latitude": 21.2179244,
    "longitude": 81.623240,
    "link": "centrum.html"
    }]'
?>