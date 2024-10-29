CREATE TABLE events (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    date DATE NOT NULL
);

-- Insert some sample data
INSERT INTO events (event_name, location, date) VALUES 
('Music Concert', 'Central Park', '2024-11-05'),
('Tech Conference', 'Downtown Convention Center', '2024-12-10'),
('Food Festival', 'Main Square', '2024-12-20');
