
-- SNIPPETS DATABASE




DROP TABLE IF EXISTS snippets;
-- new table
CREATE TABLE snippets (
  id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  iduser INTEGER NOT NULL DEFAULT 0,
  idcategory INTEGER NOT NULL DEFAULT 0,
  idsubcategory INTEGER NOT NULL DEFAULT 0,
  link VARCHAR(64),
  tags VARCHAR(128),
  description VARCHAR(255),
  title VARCHAR(64),
  content TEXT,
  enabled INTEGER NOT NULL DEFAULT 1,
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);
-- new data insert
INSERT INTO snippets (title, description)
  VALUES
    ('First snippets', 'Content to first snippets');
INSERT INTO snippets (title, description)
  VALUES
    ('Second snippets', 'Content to second snippets');
INSERT INTO snippets (title, description)
  VALUES
    ('Third snippets', 'Content to thrid snippets');
INSERT INTO snippets (title, description)
  VALUES
    ('Fourth snippets', 'Content to fourth snippets');
INSERT INTO snippets (title, description)
  VALUES
    ('Fifth snippets', 'Content to fifth snippets');




DROP TABLE IF EXISTS users;
-- new table
CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name CHAR(40) NOT NULL,
  email VARCHAR(60),
  login VARCHAR(60) NOT NULL,
  password VARCHAR(60) NOT NULL,
  role INTEGER NOT NULL DEFAULT 1,
  enabled NUMERIC NOT NULL DEFAULT 1,
  permission INTEGER NOT NULL DEFAULT 1,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  lastvisit TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
-- new data insert
INSERT INTO users (name, login, password, role, permission)
  VALUES
    ('O.Werdffelynir', 'werd', '000000', 3, 3);
INSERT INTO users (name, login, password, role, permission)
  VALUES
    ('Zender Frost', 'zender', '000000', 1, 1);




DROP TABLE IF EXISTS category;
-- new table
CREATE TABLE category (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  link CHAR(40),
  title CHAR(40),
  enabled NUMERIC NOT NULL DEFAULT 1,
  permission INTEGER NOT NULL DEFAULT 1,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
-- new data insert
INSERT INTO category (link, title)
  VALUES
    ('html','html');
INSERT INTO category (link, title)
  VALUES
    ('javascript', 'javascript');
INSERT INTO category (link, title)
  VALUES
    ('php', 'php');
INSERT INTO category (link, title)
  VALUES
    ('sql', 'sql');
INSERT INTO category (link, title)
  VALUES
    ('apache', 'apache');
INSERT INTO category (link, title)
  VALUES
    ('nginx', 'nginx');
INSERT INTO category (link, title)
  VALUES
    ('as', 'actionscript');




DROP TABLE IF EXISTS subcategory;
-- new table
CREATE TABLE subcategory (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  idcategory INTEGER NOT NULL,
  link CHAR(40),
  title CHAR(40),
  enabled NUMERIC NOT NULL DEFAULT 1,
  permission INTEGER NOT NULL DEFAULT 1,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
-- new data insert




DROP TABLE IF EXISTS comments;
-- new table
CREATE TABLE comments (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  iduser INTEGER NOT NULL DEFAULT 0,
  idsnippets INTEGER NOT NULL,
  idanswer INTEGER,
  content CHAR(2000),
  enabled NUMERIC NOT NULL DEFAULT 1,
  created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
-- new data insert
