<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orbexahub Bagels - Fresh Artisan Bagels Daily | Best Bagel Shop</title>
    <meta name="description" content="Orbexahub Bagels serves the freshest handcrafted bagels daily with authentic recipes passed down through generations. Click here to continue exploring our amazing selection of traditional and specialty bagels made with love in our local bakery.">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .bg847main-container {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .nav923header-section {
            background: #34495e;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav923header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo456brand {
            color: #e74c3c;
            font-size: 2.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .menu789nav {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .menu789nav a {
            color: #ecf0f1;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .menu789nav a:hover {
            color: #e74c3c;
        }

        .hero234section {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1775043/pexels-photo-1775043.jpeg');
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero234content {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero234title {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero234subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn567primary {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn567primary:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .section891container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section891title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .grid345layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .card123item {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .card123item:hover {
            transform: translateY(-5px);
        }

        .card123image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .card123title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #e74c3c;
        }

        .about678section {
            background: #ecf0f1;
            padding: 4rem 0;
        }

        .history456block {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-left: 5px solid #e74c3c;
            border-radius: 0 10px 10px 0;
        }

        .timeline789item {
            display: flex;
            align-items: center;
            margin: 1rem 0;
        }

        .timeline789year {
            background: #e74c3c;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            margin-right: 1rem;
            font-weight: bold;
        }

        .reviews234section {
            background: #34495e;
            color: white;
            padding: 4rem 0;
        }

        .review567card {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            margin: 1rem 0;
            backdrop-filter: blur(10px);
        }

        .review567author {
            font-weight: bold;
            color: #e74c3c;
            margin-top: 1rem;
        }

        .footer890section {
            background: #2c3e50;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer890content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer890title {
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .contact456link {
            color: #ecf0f1;
            text-decoration: none;
        }

        .contact456link:hover {
            color: #e74c3c;
        }

        .modal123overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal123content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal123close {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .specialty789grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .ingredient456list {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1rem 0;
        }

        .process234steps {
            counter-reset: step-counter;
        }

        .process234step {
            counter-increment: step-counter;
            position: relative;
            padding-left: 3rem;
            margin: 1.5rem 0;
        }

        .process234step::before {
            content: counter(step-counter);
            position: absolute;
            left: 0;
            top: 0;
            background: #e74c3c;
            color: white;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .community567section {
            background: linear-gradient(45deg, #f39c12, #e67e22);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .awards123showcase {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 2rem 0;
        }

        .award456item {
            background: rgba(255,255,255,0.2);
            padding: 1.5rem;
            border-radius: 10px;
            margin: 0.5rem;
            min-width: 200px;
        }

        @media (max-width: 768px) {
            .nav923header-content {
                flex-direction: column;
                gap: 1rem;
            }

            .menu789nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero234title {
                font-size: 2.5rem;
            }

            .grid345layout {
                grid-template-columns: 1fr;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

    
</head>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%35%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%35%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%35%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

<body class="bg847main-container">
    <header class="nav923header-section">
        <div class="nav923header-content">
            <a href="#home" class="logo456brand">Orbexahub Bagels</a>
            <nav>
                <ul class="menu789nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#specialties">Our Specialties</a></li>
                    <li><a href="#history">Our Story</a></li>
                    <li><a href="#process">Baking Process</a></li>
                    <li><a href="#ingredients">Fresh Ingredients</a></li>
                    <li><a href="#community">Community</a></li>
                    <li><a href="#awards">Awards</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero234section">
        <div class="hero234content">
            <h1 class="hero234title">Authentic Handcrafted Bagels</h1>
            <p class="hero234subtitle">Experience the traditional taste of freshly baked bagels made with time-honored recipes and the finest ingredients</p>
            <a href="#specialties" class="btn567primary">Click Here to Continue Exploring</a>
        </div>
    </section>

    <section id="specialties" class="section891container">
        <h2 class="section891title">Our Signature Specialties</h2>
        <div class="grid345layout">
            <div class="card123item">
                <img src="https://images.pexels.com/photos/4686820/pexels-photo-4686820.jpeg" alt="Everything Bagel" class="card123image">
                <h3 class="card123title">Everything Bagel</h3>
                <p>Our most popular creation featuring a perfect blend of sesame seeds, poppy seeds, garlic, onion, and sea salt. Each bite delivers an explosion of flavors that will transport you to bagel paradise.</p>
            </div>
            <div class="card123item">
                <img src="https://images.pexels.com/photos/5560763/pexels-photo-5560763.jpeg" alt="Sesame Bagel" class="card123image">
                <h3 class="card123title">Classic Sesame</h3>
                <p>Traditional sesame bagels with a golden crust and tender interior. Made using our grandmother's secret recipe that has been perfected over three generations of dedicated baking.</p>
            </div>
            <div class="card123item">
                <img src="https://images.pexels.com/photos/4686818/pexels-photo-4686818.jpeg" alt="Plain Bagel" class="card123image">
                <h3 class="card123title">Original Plain</h3>
                <p>Sometimes simplicity is perfection. Our plain bagels showcase the pure essence of traditional bagel making with their chewy texture and subtle sweetness that pairs beautifully with any topping.</p>
            </div>
            <div class="card123item">
                <img src="https://images.pexels.com/photos/6210959/pexels-photo-6210959.jpeg" alt="Cinnamon Raisin Bagel" class="card123image">
                <h3 class="card123title">Cinnamon Raisin Delight</h3>
                <p>Sweet and aromatic bagels swirled with cinnamon and studded with plump raisins. Perfect for breakfast or an afternoon treat with cream cheese or butter.</p>
            </div>
            <div class="card123item">
                <img src="https://images.pexels.com/photos/4686822/pexels-photo-4686822.jpeg" alt="Poppy Seed Bagel" class="card123image">
                <h3 class="card123title">Poppy Seed Classic</h3>
                <p>Traditional poppy seed bagels with a distinctive nutty flavor and delightful crunch. These bagels have been a customer favorite since we first opened our doors.</p>
            </div>
            <div class="card123item">
                <img src="https://images.pexels.com/photos/5702600/pexels-photo-5702600.jpeg" alt="Whole Wheat Bagel" class="card123image">
                <h3 class="card123title">Wholesome Wheat</h3>
                <p>Nutritious whole wheat bagels made with stone-ground flour and a touch of honey. These hearty bagels provide sustained energy and incredible flavor for health-conscious customers.</p>
            </div>
        </div>
        <div style="text-align: center; margin: 2rem 0;">
            <a href="#process" class="btn567primary">Click Here to Continue Learning About Our Process</a>
        </div>
    </section>

    <section id="history" class="about678section">
        <div class="section891container">
            <h2 class="section891title">The Orbexahub Legacy</h2>
            <div class="history456block">
                <h3>From Humble Beginnings to Bagel Excellence</h3>
                <p>The Orbexahub story began in 1987 when Maria Kowalski decided to bring her family's traditional Polish bagel recipes to the local community. What started as a small operation in her home kitchen has grown into the most beloved bagel destination in the region.</p>
                
                <div class="timeline789item">
                    <span class="timeline789year">1987</span>
                    <p>Maria starts baking bagels from her home kitchen, selling to neighbors and local cafes</p>
                </div>
                
                <div class="timeline789item">
                    <span class="timeline789year">1992</span>
                    <p>First official Orbexahub Bagels storefront opens on Maple Street with just four employees</p>
                </div>
                
                <div class="timeline789item">
                    <span class="timeline789year">1998</span>
                    <p>Introduction of the famous "Everything Bagel" recipe that becomes an instant local sensation</p>
                </div>
                
                <div class="timeline789item">
                    <span class="timeline789year">2003</span>
                    <p>Expansion to current location with state-of-the-art baking facilities and increased production capacity</p>
                </div>
                
                <div class="timeline789item">
                    <span class="timeline789year">2010</span>
                    <p>Third generation joins the business, bringing fresh ideas while maintaining traditional quality</p>
                </div>
                
                <div class="timeline789item">
                    <span class="timeline789year">2018</span>
                    <p>Recognition as "Best Bagel Shop" by Regional Food Critics Association for five consecutive years</p>
                </div>
                
                <div class="timeline789item">
                    <span class="timeline789year">2023</span>
                    <p>Launch of online ordering system and expanded delivery services throughout the metropolitan area</p>
                </div>
            </div>
            
            <div class="history456block">
                <h3>Family Traditions Meet Modern Innovation</h3>
                <p>While we've embraced modern baking techniques and equipment, the heart of our operation remains unchanged. Every bagel is still hand-rolled using the same techniques Maria learned from her grandmother in Krakow. We believe that the secret to exceptional bagels lies not just in quality ingredients, but in the love and care that goes into every step of the process.</p>
                
                <p>Our commitment to the community extends beyond just serving great bagels. We source our flour from local mills, support regional farmers for our fresh ingredients, and provide employment opportunities for dozens of local residents. The Orbexahub family includes not just our employees, but every customer who walks through our doors.</p>
            </div>
        </div>
    </section>

    <section id="process" class="section891container">
        <h2 class="section891title">Our Time-Honored Baking Process</h2>
        <div class="process234steps">
            <div class="process234step">
                <h4>Dough Preparation</h4>
                <p>We begin each day at 4 AM by mixing our signature dough using high-gluten flour, filtered water, active yeast, and a touch of malt syrup. The dough is mixed slowly to develop the perfect gluten structure that gives our bagels their characteristic chewy texture.</p>
            </div>
            
            <div class="process234step">
                <h4>Hand Rolling and Shaping</h4>
                <p>Every single bagel is hand-rolled by our experienced bakers. We divide the dough into precise portions, roll each piece into a rope, and form the classic bagel shape by hand. This traditional method ensures consistent size and the authentic appearance that machine-made bagels simply cannot achieve.</p>
            </div>
            
            <div class="process234step">
                <h4>Overnight Fermentation</h4>
                <p>After shaping, our bagels undergo a slow, cold fermentation process in our walk-in coolers. This 12-hour fermentation develops complex flavors and creates the dense, chewy texture that distinguishes authentic bagels from ordinary bread rolls.</p>
            </div>
            
            <div class="process234step">
                <h4>Boiling in Malt Water</h4>
                <p>Before baking, each bagel is boiled in water enriched with malt syrup and a touch of baking soda. This crucial step creates the shiny, chewy crust that is the hallmark of a true bagel. The boiling time is carefully controlled to achieve the perfect texture.</p>
            </div>
            
            <div class="process234step">
                <h4>Topping Application</h4>
                <p>While still wet from boiling, bagels receive their toppings. Whether it's sesame seeds, poppy seeds, or our famous everything blend, each topping is applied by hand to ensure even coverage and optimal flavor distribution.</p>
            </div>
            
            <div class="process234step">
                <h4>High-Temperature Baking</h4>
                <p>Our bagels are baked in deck ovens at high temperatures to create the perfect contrast between the crispy exterior and tender interior. The baking process is monitored constantly to ensure each batch achieves the ideal golden-brown color and texture.</p>
            </div>
        </div>
    </section>

    <section id="ingredients" class="about678section">
        <div class="section891container">
            <h2 class="section891title">Premium Fresh Ingredients</h2>
            <div class="specialty789grid">
                <div class="ingredient456list">
                    <h4>Artisan Flours</h4>
                    <p>We exclusively use high-gluten bread flour sourced from heritage wheat varieties. Our flour is milled fresh weekly by local artisan millers who share our commitment to quality and traditional methods.</p>
                </div>
                
                <div class="ingredient456list">
                    <h4>Pure Filtered Water</h4>
                    <p>Water quality significantly impacts bagel texture and flavor. We use a multi-stage filtration system to ensure our water is free from chlorine and other chemicals that could interfere with yeast activity and dough development.</p>
                </div>
                
                <div class="ingredient456list">
                    <h4>Active Fresh Yeast</h4>
                    <p>We use only fresh, active yeast that is delivered twice weekly. This ensures optimal fermentation and the development of complex flavors that make our bagels stand out from mass-produced alternatives.</p>
                </div>
                
                <div class="ingredient456list">
                    <h4>Natural Malt Syrup</h4>
                    <p>Our malt syrup is made from malted barley and adds subtle sweetness while feeding the yeast during fermentation. It also contributes to the beautiful golden color and glossy finish of our finished bagels.</p>
                </div>
                
                <div class="ingredient456list">
                    <h4>Sea Salt</h4>
                    <p>We use mineral-rich sea salt that enhances flavor while regulating yeast activity. The natural minerals in sea salt contribute to the complex flavor profile that distinguishes our bagels.</p>
                </div>
                
                <div class="ingredient456list">
                    <h4>Premium Toppings</h4>
                    <p>Our sesame seeds, poppy seeds, and spices are sourced from specialty suppliers who guarantee freshness and quality. Each topping is stored in optimal conditions to maintain peak flavor and nutritional value.</p>
                </div>
            </div>
            
            <div style="text-align: center; margin: 2rem 0;">
                <a href="#community" class="btn567primary">Click Here to Continue Discovering Our Community Impact</a>
            </div>
        </div>
    </section>

    <section id="community" class="community567section">
        <div class="section891container">
            <h2 class="section891title">Community Connections</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">At Orbexahub Bagels, we believe in giving back to the community that has supported us for over three decades. Our commitment extends far beyond baking exceptional bagels.</p>
            
            <div class="grid345layout">
                <div class="card123item" style="background: rgba(255,255,255,0.9);">
                    <h4 style="color: #e74c3c;">Local School Programs</h4>
                    <p>We partner with elementary schools to provide fresh bagels for breakfast programs, ensuring students start their day with nutritious, filling meals. Our education initiative has served over 50,000 bagels to local students.</p>
                </div>
                
                <div class="card123item" style="background: rgba(255,255,255,0.9);">
                    <h4 style="color: #e74c3c;">Senior Center Partnerships</h4>
                    <p>Every Wednesday, we deliver complimentary bagels to three local senior centers. This program not only provides nutritious food but also creates opportunities for social interaction and community building among elderly residents.</p>
                </div>
                
                <div class="card123item" style="background: rgba(255,255,255,0.9);">
                    <h4 style="color: #e74c3c;">Food Bank Donations</h4>
                    <p>Unsold bagels from each day are donated to the regional food bank rather than being discarded. This sustainable practice has contributed over 15,000 bagels annually to families in need throughout our community.</p>
                </div>
                
                <div class="card123item" style="background: rgba(255,255,255,0.9);">
                    <h4 style="color: #e74c3c;">Local Employment</h4>
                    <p>We prioritize hiring from within our community and provide comprehensive training programs. Many of our employees have been with us for over a decade, creating stable employment and career advancement opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="awards" class="section891container">
        <h2 class="section891title">Recognition and Awards</h2>
        <div class="awards123showcase">
            <div class="award456item">
                <h4>Best Bagel Shop 2019-2023</h4>
                <p>Regional Food Critics Association</p>
            </div>
            
            <div class="award456item">
                <h4>Community Business Excellence</h4>
                <p>Chamber of Commerce 2021</p>
            </div>
            
            <div class="award456item">
                <h4>Sustainable Business Practices</h4>
                <p>Green Business Council 2022</p>
            </div>
            
            <div class="award456item">
                <h4>Customer Service Excellence</h4>
                <p>Local Business Review Board 2023</p>
            </div>
        </div>
        
        <div class="history456block">
            <h3>Media Recognition</h3>
            <p>Orbexahub Bagels has been featured in numerous publications and media outlets. Food & Wine Magazine highlighted our traditional baking methods in their "Authentic American Bakeries" feature. The Regional Tribune has written three separate articles about our community involvement and business practices.</p>
            
            <p>Local television stations have featured our bakery during morning shows, showcasing our hand-rolling techniques and interviewing our master bakers about the art of bagel making. These features have helped spread awareness of traditional bagel crafting methods and the importance of supporting local businesses.</p>
        </div>
    </section>

    <section id="reviews" class="reviews234section">
        <div class="section891container">
            <h2 class="section891title">What Our Customers Say</h2>
            <div class="grid345layout">
                <div class="review567card">
                    <p>"I've been coming to Orbexahub for fifteen years, and the quality has never wavered. These are the most authentic bagels I've found outside of New York City. The everything bagel is absolutely perfect - crispy outside, chewy inside, with just the right amount of toppings."</p>
                    <div class="review567author">- Sarah Mitchell, Regular Customer</div>
                </div>
                
                <div class="review567card">
                    <p>"As someone who grew up eating traditional bagels, I can confidently say that Orbexahub maintains the authentic methods and flavors that are so hard to find today. The staff is knowledgeable and passionate about their craft."</p>
                    <div class="review567author">- David Rosenberg, Food Enthusiast</div>
                </div>
                
                <div class="review567card">
                    <p>"The cinnamon raisin bagels are incredible! My family drives thirty minutes every Sunday morning just to get fresh bagels from Orbexahub. The kids love them toasted with cream cheese, and I appreciate knowing they're made with quality ingredients."</p>
                    <div class="review567author">- Jennifer Thompson, Mother of Three</div>
                </div>
                
                <div class="review567card">
                    <p>"I'm a professional chef, and I'm very particular about bread products. Orbexahub produces bagels that meet the highest standards. The texture, flavor, and consistency are exceptional. I recommend them to all my colleagues."</p>
                    <div class="review567author">- Chef Michael Rodriguez, Culinary Professional</div>
                </div>
                
                <div class="review567card">
                    <p>"The customer service here is outstanding. The staff knows my order by heart and always greets me with a smile. It's clear that this is a family business that truly cares about their customers and community."</p>
                    <div class="review567author">- Robert Chen, Daily Customer</div>
                </div>
                
                <div class="review567card">
                    <p>"I've tried bagels from many places, but nothing compares to the freshness and flavor of Orbexahub bagels. You can taste the difference that traditional methods and quality ingredients make. These bagels have ruined me for all others!"</p>
                    <div class="review567author">- Amanda Foster, Bagel Connoisseur</div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer890section">
        <div class="footer890content">
            <div>
                <h4 class="footer890title">Contact Information</h4>
                <p>Visit us at our bakery location:</p>
                <p>847 Riverside Boulevard<br>
                Springfield, IL 62701</p>
                <p>Phone: <a href="tel:+12175559847" class="contact456link">(217) 555-9847</a></p>
                <p>Email: <a href="mailto:hello@orbexahub.com" class="contact456link">hello@orbexahub.com</a></p>
            </div>
            
            <div>
                <h4 class="footer890title">Business Hours</h4>
                <p>Monday - Friday: 5:30 AM - 3:00 PM</p>
                <p>Saturday: 6:00 AM - 4:00 PM</p>
                <p>Sunday: 6:30 AM - 2:00 PM</p>
                <p><em>Fresh bagels available all day!</em></p>
            </div>
            
            <div>
                <h4 class="footer890title">Special Services</h4>
                <p>• Large order catering available</p>
                <p>• Corporate breakfast delivery</p>
                <p>• Special event bagel platters</p>
                <p>• Custom bagel varieties by request</p>
                <p>• Wholesale accounts welcome</p>
            </div>
            
            <div>
                <h4 class="footer890title">Legal Information</h4>
                <p><a href="#" onclick="showModal('privacy')" class="contact456link">Privacy Policy</a></p>
                <p><a href="#" onclick="showModal('terms')" class="contact456link">Terms of Service</a></p>
                <p>© 2024 Orbexahub Bagels</p>
                <p>All rights reserved</p>
            </div>
        </div>
        
        <div style="text-align: center; padding: 2rem; border-top: 1px solid #34495e; margin-top: 2rem;">
            <p>Follow us for daily fresh bagel updates and special offers!</p>
            <a href="#home" class="btn567primary" style="margin-top: 1rem;">Click Here to Continue to Top</a>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal123overlay">
        <div class="modal123content">
            <span class="modal123close" onclick="hideModal('privacy')">&times;</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>Orbexahub Bagels collects information you provide directly to us, such as when you place an order, sign up for our newsletter, or contact us with questions. This may include your name, email address, phone number, and delivery address.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to process your orders, communicate with you about your purchases, send you promotional materials (with your consent), and improve our services. We may also use your information to comply with legal obligations.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties except as described in this policy. We may share your information with service providers who assist us in operating our business, conducting transactions, or servicing you.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time by contacting us directly.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at hello@orbexahub.com or (217) 555-9847.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal123overlay">
        <div class="modal123content">
            <span class="modal123close" onclick="hideModal('terms')">&times;</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using the services of Orbexahub Bagels, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Products and Services</h3>
            <p>Orbexahub Bagels provides fresh baked bagels and related food products. All products are made fresh daily using traditional methods and quality ingredients. We reserve the right to modify our menu and offerings at any time.</p>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to acceptance by Orbexahub Bagels. We reserve the right to refuse or cancel any order for any reason. Payment is due at the time of order placement or upon delivery/pickup as agreed.</p>
            
            <h3>Delivery and Pickup</h3>
            <p>Delivery times are estimates and may vary due to weather, traffic, or other circumstances beyond our control. Pickup orders must be collected within 24 hours of notification that they are ready.</p>
            
            <h3>Quality Guarantee</h3>
            <p>We stand behind the quality of our products. If you are not satisfied with your purchase, please contact us within 24 hours and we will work to resolve any issues.</p>
            
            <h3>Limitation of Liability</h3>
            <p>Orbexahub Bagels shall not be liable for any indirect, incidental, special, or consequential damages arising from the use of our products or services.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting on our website or premises.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at hello@orbexahub.com or (217) 555-9847.</p>
        </div>
    </div>

    <script>
        function showModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function hideModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal123overlay')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to cards
            const cards = document.querySelectorAll('.card123item');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>





