Create Table If Not Exists Courses_Table (
	id int Primary Key Auto_Increment,
    course_name VarChar(100) Not Null Unique,
    semester_given Char(3) Not Null,
    instructor_name VarChar(100),
    book_name VarChar(100),
    credits decimal(3, 2) Not Null
);

Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Mathematics for Computer Science', 'F19', 'Gabriel Indurskis', 'Essential Computer Mathematics', 2.33);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Computer/IT Fundamentals', 'F19', 'Brendan Wood', 'COMPUTER Concepts & Applications', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Object Oriented Programming Level 1', 'F19', 'Elaheh Mozaffari', 'Starting Out with JAVA early Objects 6', 3.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('User Experience/Web Interface Design', 'F19', 'Reza Mirsalari', 'None', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Configuring, Managing and Maintaining Computers', 'W20', 'Reza Mirsalari', 'Testout LabSim Course for CompTIA: PC Pro', 1.67);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Object Oriented Programming Level 2', 'W20', 'Elaheh Mozaffari', 'Starting Out with JAVA early Objects 6', 3.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Operating Systems using Linux', 'W20', 'Brendan Wood', 'Linux+ and LPIC-1 Guide to Linux Certification', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Web Programming and JS Libraries', 'W20', 'Istiaque Shahriar', 'JavaScript & jQuery – Interactive front-end web development', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Project Management with Quantitative Methods', 'W20', 'Jennifer Liutec', 'Project Management with Quantitative Methods', 1.67);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Database Design with an Introduction to SQL', 'F20', 'Robert Bierman', 'Database Systems: Design, Implementation, & Management', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Networking and Security', 'F20', 'Brendan Wood', 'Guide to Networking Essentials (Course Technology)', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('.NET Development', 'F20', 'Brendan Wood', 'None', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Java Web Programming', 'F20', 'Reza Mirsalari', 'Servlet & JSP: A Tutorial', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Introduction to IoT (Internet of Things) and Embedded Systems', 'F20', 'Elaheh Mozaffari', 'None', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Web Development with PHP', 'W21', 'Lucia Eve Berger', 'Programming PHP', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Systems Analysis and Design', 'W21', 'Christine Gerard', 'Systems Analysis and Design in a Changing World & Systems Analysis and Design', 2.33);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Mobile Applications Development 1: Android', 'W21', 'Istiaque Shahriar', 'Android Programming Concepts & Android Programming: The Big Nerd Ranch Guide', 2.33);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Game Development with Unity', 'W21', 'Brendan Wood', 'None', 2.00);
Insert Into Courses_Table (course_name, semester_given, instructor_name, book_name, credits) Values ('Web Services and Distributed Computing', 'W21', 'Christine Gerard', 'Microservices: Flexible Software Architecture', 2.33);