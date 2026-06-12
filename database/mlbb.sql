CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') DEFAULT 'user'
);

CREATE TABLE heroes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,
    deskripsi TEXT NOT NULL,
    image VARCHAR(255) NOT NULL
);

CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    deskripsi TEXT NOT NULL
);

CREATE TABLE teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_team VARCHAR(100) NOT NULL,
    negara VARCHAR(100) NOT NULL,
    deskripsi TEXT NOT NULL
);

INSERT INTO heroes (nama, role, deskripsi, image) VALUES
('Ling','Assassin','Hero dengan mobilitas tinggi dan burst damage mematikan.','ling.jpg'),
('Julian','Fighter / Mage','Memiliki kombinasi skill yang sangat fleksibel.','julian.jpg'),
('Beatrix','Marksman','Memiliki empat jenis senjata dengan gaya bermain berbeda.','beatrix.jpg'),
('Fredrinn','Tank / Fighter','Memiliki durability tinggi dan crowd control kuat.','fredrin.jpg'),
('Nolan','Assassin','Hero assassin dengan damage sangat besar.','nolan.jpg'),
('Xavier','Mage','Mage dengan serangan jarak jauh dan ultimate global.','xavier.jpg');

INSERT INTO items (nama, kategori, deskripsi) VALUES
('Blade of Despair','Physical Attack','Memberikan Physical Attack terbesar dan sangat efektif untuk hero core.'),
('Endless Battle','Physical Attack','Menambahkan True Damage setelah menggunakan skill.'),
('Blood Wings','Magic','Magic Power tinggi dan tambahan shield untuk mage.'),
('Holy Crystal','Magic','Meningkatkan Magic Damage secara signifikan.'),
('Immortality','Defense','Menghidupkan kembali hero setelah terbunuh.'),
('Dominance Ice','Defense','Mengurangi Attack Speed dan HP Regen lawan.'),
('Oracle','Defense','Meningkatkan efek shield dan regenerasi HP.'),
('Divine Glaive','Magic','Memberikan Magic Penetration tinggi terhadap tank.');

INSERT INTO teams (nama_team, negara, deskripsi) VALUES
('ONIC Esports','Indonesia','Juara MPL Indonesia.'),
('EVOS Glory','Indonesia','Juara Dunia M1.'),
('Team Liquid PH','Filipina','Tim kompetitif asal Filipina di MPL Philippines.'),
('Falcon Esports','Myanmar','Tim kuat dari Asia Tenggara.'),
('Alter Ego','Indonesia','Salah satu tim unggulan Indonesia.');

INSERT INTO users (nama,email,username,password,role)
VALUES (
'Administrator',
'admin@mlbb.com',
'admin',
'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
'admin'
);
