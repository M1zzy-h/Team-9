CREATE TABLE Users(
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Password1 VARCHAR(255) NOT NULL,
    FirstName VARCHAR(50),
    Lastname VARCHAR(50),
    Address1 TEXT,
    Phonenumber VARCHAR(50),
    UserType ENUM('admin','customer') NOT NULL DEFAULT 'customer',
    INDEX idx_user_email (Email),
    INDEX idx_user_type (UserType)

);

CREATE TABLE Artists (
    ArtistID INT AUTO_INCREMENT PRIMARY KEY,
    ArtistName VARCHAR(100) NOT NULL,
    Biography TEXT,
    ImageURL VARCHAR(255),
    INDEX idx_artist_name (ArtistName)
);

CREATE TABLE ProductCatagories (
    CatagoryID INT AUTO_INCREMENT PRIMARY KEY,
    CatagoryName VARCHAR(50) NOT NULL UNIQUE,
    Description TEXT,
    INDEX idx_catagory_name (CatagoryName)
);

CREATE TABLE Products (
    ProductID INT AUTO_INCREMENT PRIMARY KEY,
    CategoryID INT NOT NULL,
    ArtistID INT NOT NULL,
    AlbumTitle VARCHAR(100) NOT NULL,
    Description TEXT,
    Price DECIMAL(10,2) NOT NULL,
    ImageURL VARCHAR(255),
    StockLevel INT NOT NULL DEFAULT 0,
    StockThreshold INT NOT NULL DEFAULT 5,
    Status ENUM('active', 'inactive') DEFAULT 'active',
    FOREIGN KEY (CategoryID) REFERENCES ProductCategories(CategoryID) ON DELETE CASCADE,
    FOREIGN KEY (ArtistID) REFERENCES Artists(ArtistID) ON DELETE CASCADE,
    INDEX idx_product_name (ProductName),
    INDEX idx_product_category (CategoryID),
);

CREATE TABLE Orders (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT NOT NULL,
    OrderDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    TotalAmount DECIMAL(10,2) NOT NULL,
    Status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
    ShippingAddress TEXT NOT NULL,
    PaymentMethod VARCHAR(50) DEFAULT 'dummy', 
    TrackingNumber VARCHAR(50),
    FOREIGN KEY (UserID) REFERENCES Users(UserID) ON DELETE CASCADE,
    INDEX idx_order_user (UserID),
    INDEX idx_order_status (Status),
    INDEX idx_order_date (OrderDate)
);

CREATE TABLE OrderItems (
    OrderItemID INT AUTO_INCREMENT PRIMARY KEY,
    OrderID INT NOT NULL,
    ProductID INT NOT NULL,
    Quantity INT NOT NULL,
    UnitPrice DECIMAL(10,2) NOT NULL,
    Subtotal DECIMAL(10,2) NOT NULL,
    ReturnStatus ENUM('not_returned', 'return_requested', 'returned', 'return_rejected') DEFAULT 'not_returned',
    ReturnReason TEXT,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID) ON DELETE CASCADE,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID) ON DELETE CASCADE,
    INDEX idx_orderitem_order (OrderID),
    INDEX idx_orderitem_product (ProductID),
    INDEX idx_orderitem_return (ReturnStatus)
);

CREATE TABLE ShoppingCart (
    CartID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT NOT NULL,
    ProductID INT NOT NULL,
    Quantity INT NOT NULL DEFAULT 1,
    DateAdded DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID) ON DELETE CASCADE,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID) ON DELETE CASCADE,
    UNIQUE KEY unique_cart_item (UserID, ProductID, VariantID),
    INDEX idx_cart_user (UserID)
);

CREATE TABLE ProductReviews (
    ReviewID INT AUTO_INCREMENT PRIMARY KEY,
    ProductID INT NOT NULL,
    UserID INT NOT NULL,
    Rating INT NOT NULL CHECK (Rating BETWEEN 1 AND 5),
    ReviewText TEXT,
    ReviewDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID) ON DELETE CASCADE,
    FOREIGN KEY (UserID) REFERENCES Users(UserID) ON DELETE CASCADE,
    UNIQUE KEY unique_product_review (ProductID, UserID),
    INDEX idx_review_product (ProductID),
    INDEX idx_review_user (UserID),
    INDEX idx_review_rating (Rating)
);

CREATE TABLE WebsiteReviews (
    WebsiteReviewID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT NOT NULL,
    Rating INT NOT NULL CHECK (Rating BETWEEN 1 AND 5),
    ReviewText TEXT,
    CustomerServiceRating INT CHECK (CustomerServiceRating BETWEEN 1 AND 5),
    ReviewDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID) ON DELETE CASCADE,
    UNIQUE KEY unique_website_review (UserID),
    INDEX idx_website_review_rating (Rating)
);

CREATE TABLE InventoryTransactions (
    TransactionID INT AUTO_INCREMENT PRIMARY KEY,
    ProductID INT NOT NULL,
    VariantID INT,
    TransactionType ENUM('incoming', 'outgoing') NOT NULL,
    Quantity INT NOT NULL,
    TransactionDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    ReferenceID VARCHAR(50), -- OrderID for outgoing, PurchaseID for incoming
    SupplierInfo VARCHAR(255), -- For incoming inventory
    Notes TEXT,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID) ON DELETE CASCADE,
    FOREIGN KEY (VariantID) REFERENCES ProductVariants(VariantID) ON DELETE SET NULL,
    INDEX idx_transaction_product (ProductID),
    INDEX idx_transaction_date (TransactionDate),
    INDEX idx_transaction_type (TransactionType)
);

CREATE TABLE ContactRequests (
    RequestID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Subject VARCHAR(200),
    Message TEXT NOT NULL,
    DateSubmitted DATETIME DEFAULT CURRENT_TIMESTAMP,
    Status ENUM('new', 'read', 'responded') DEFAULT 'new',
    INDEX idx_contact_status (Status),
    INDEX idx_contact_date (DateSubmitted)
);

INSERT INTO Users (Email, Password1, FirstName, LastName, UserType) 
VALUES ( 'admin@EmeraldVinyl.com', 'Admin123', 'Admin', 'User', 'admin');

INSERT INTO ProductCategories (CategoryName, Description) VALUES 
('Rock', 'Rock music including classic, indie, alternative, and more'),
('Jazz', 'Jazz records from bebop to fusion and contemporary'),
('Hip Hop', 'Hip hop and rap albums from classic to current'),
('Electronic', 'Electronic music including techno, house, ambient and more'),
('Classical', 'Classical music from baroque to contemporary');

INSERT INTO Artists (ArtistName, Biography) VALUES
('The Beatles', 'The Beatles were an English rock band formed in Liverpool in 1960.'),
('Frank Sinatra', 'Francis Albert Sinatra was an American singer and actor.'),
('Kendrick Lamar', 'Kendrick Lamar is an American rapper, songwriter, and record producer.'),
('Daft Punk', 'Daft Punk was a French electronic music duo formed in 1993.'),
('Ludwig van Beethoven', 'Ludwig van Beethoven was a German composer and pianist (1770-1827).');