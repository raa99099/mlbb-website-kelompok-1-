```sql
CREATE DATABASE IF NOT EXISTS mlbb;
USE mlbb;

-- =========================
-- TABLE USERS
-- =========================

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') DEFAULT 'user'
);

-- =========================
-- TABLE HEROES
-- =========================

CREATE TABLE heroes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    damage INT NOT NULL
);

-- =========================
-- TABLE ITEMS
-- =========================

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    harga INT NOT NULL
);

-- =========================
-- TABLE TEAMS
-- =========================

CREATE TABLE teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_team VARCHAR(100) NOT NULL,
    asal VARCHAR(100) NOT NULL
);

-- =========================
-- DATA USERS
-- =========================

INSERT INTO users (username, password, role) VALUES
('admin', '$2y$10$abcdefghijklmnopqrstuv', 'admin');

-- =========================
-- DATA HEROES
-- =========================

INSERT INTO heroes (nama, role, damage) VALUES
('Hayabusa', 'Assassin', 95),
('Miya', 'Marksman', 85),
('Tigreal', 'Tank', 70),
('Eudora', 'Mage', 88),
('Chou', 'Fighter', 90),
('Angela', 'Support', 65);

-- =========================
-- DATA ITEMS
-- =========================

INSERT INTO items (nama, harga) VALUES
('Blade of Despair', 3010),
('Blood Wings', 3000),
('Immortality', 2120),
('Athena Shield', 2150),
('War Axe', 2100),
('Demon Hunter Sword', 2180);

-- =========================
-- DATA TEAMS
-- =========================

INSERT INTO teams (nama_team, asal) VALUES
('ONIC Esports', 'Indonesia'),
('RRQ Hoshi', 'Indonesia'),
('EVOS Glory', 'Indonesia'),
('Team Liquid PH', 'Filipina'),
('AP Bren', 'Filipina'),
('Falcon Esports', 'Myanmar');
```
