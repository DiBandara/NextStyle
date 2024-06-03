---

# NextStyle - E-Commerce Platform

## Overview

NextStyle is a clothing shop e-commerce platform developed for the Advanced Database Management System course at the National Institute of Business Management (NIBM). The project demonstrates the use of both RDBMS and NoSQL databases.

## Team Members
- Dileesha Bandara
- Pramod Madhubhashana

## Project Structure

### Database Design

#### Relational Database (RDBMS)
- **OrderPayment**: OrderId, PaymentDate, PaymentMethod, Status
- **Customer_Detail**: CusId, CusName, CusAddress, CusTeleNo, CusEmail
- **Order**: OrderId, OrderDate, CusId, TotalAmount
- **Product_Detail**: ProId, ProName, ProdQty, UnitPrice
- **Order_Item**: OrderId, ItemId, ItemQty

#### NoSQL Database
- **MongoDB**: Used for storing product reviews and customer feedback.

### Features

- **Customer Management**
- **Product Management**
- **Order Management**
- **User-Generated Content Management**

### Comparison of RDBMS and NoSQL

| Aspect         | RDBMS          | NoSQL           |
|----------------|----------------|-----------------|
| Data Structure | Structured     | Unstructured    |
| Schema         | Fixed          | Flexible        |
| Transactions   | ACID compliance| Eventual consistency|

## Installation and Setup

1. **Clone the Repository**
   ```bash
   git clone https://github.com/DiBandara/nextstyle.git
   ```

2. **Setup Databases**
   - Import the SQL script to set up the SQL Server/Oracle database.
   - Install MongoDB and configure the connection settings.

3. **Run the Application**
   - Follow the setup instructions for your specific platform/framework.

## Technologies Used

- **Languages**: [e.g., Java, Python]
- **Frameworks**: [e.g., Spring Boot, Django]
- **Databases**: SQL Server/Oracle, MongoDB

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For questions or feedback, contact:
- Dileesha Bandara - tharukadileesha1@gmail.com
- Pramod - (https://github.com/PramodMadhubhashana)

---
