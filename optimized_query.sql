CREATE INDEX idx_customer_id ON orders(customer_id);

SELECT order_id, order_date, total_amount
FROM orders
WHERE customer_id = 123;
