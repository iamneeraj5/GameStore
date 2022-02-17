<%@ page language="java" import="java.sql.*"%>

<%

    String name = request.getParameter("Name");
    
    String email = request.getParameter("email id");
    String review = request.getParameter("Review");

    try {

        Class.forName("com.mysql.jdbc.Driver");

        Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/login", "root", "");

        PreparedStatement ps = con.prepareStatement("insert into feedback values(?,?,?)");

        ps.setString(1, name);
            
        ps.setString(2, email);

        ps.setString(3,review);

        ps.executeUpdate();

        String redirectURL = "tq.html";
        response.sendRedirect(redirectURL);

    } catch (Exception e) {

        out.println(e);

    } 

%>