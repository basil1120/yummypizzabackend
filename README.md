The Yummi Pizza Test

1. Task Description
• Let’s say you want to start a new pizza delivery business.
• Please create a web application for ordering pizza for your clients, which contains a shopping cart.
• Take the pizza order and the delivery address and contact details for the client.
• Login is not required but could be available for checking the history of orders.
2. Requirements
• Your clients should be able to order pizzas from the menu
• The menu contains at least 8 pizzas
• You can decide what else you want in the menu
• Processing order/etc. with payment is NOT required.
• Concentrate on the interface to your pizza customer up to the point the customer confirms his order.
• The pizza order process should cover ordering single or several pizzas with definition of the quantity and
calculation of a total price in Euros and US$ also adding delivery costs to the bill.
3. Technology (preferred as the clients use them in their company)
• Frontend – ReactJS
• Backend – Laravel
• Database – MySQL
• You get extra points for adding testing (for both frontend and backend);
• Design - you are free to use any framework or library whatever you want but keep in mind we primarily
judge functionality and workflow. Less is more.
4. Delivery format
• Please provide the repository links separately for frontend and backend with Demo application URL (e.g.
in Heroku).
• The solution has to be testable by a non-technical person


TECHNOLOGIES STACK IMPLIED
- Laravel
- React JS
- MySQL database
- RESTFULL API

Test Instructions:
    1. Open the front-end demo url
    2. Click the +(plus) button to add pizza of choice to your shopping cart.
    3. Click My Cart Link to view items on cart OR add quantity.
    4. Fill in customer details ie. Name, Phone , Location  and Additional details
    5. Check the shipping cost check-box
    6. Click Checkout Button and wait for success notification.
    7. On the above button-click order details are posted to the database table for orders.
    8. The order history can be fetched by the laravel backend api GET METHOD : https://yummypizza.herokuapp.com/api/pizzaorders
