<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <html>
    <body bgcolor="#141A1F" display-align="center">
        <center>
        <h1 style="color: #EFF0AA; margin: 5rem 0 3rem;font-size: 3.2rem;">User Details</h1>
        <table border="6px" border-style="solid" table-layout="fixed" width="50%" display-align="center">
        <tr bgcolor="#89CFD4">
            <th style="font-size: 1.5rem;"><b>Name</b></th>
            <th style="font-size: 1.5rem;"><b>Email</b></th>
            <th style="font-size: 1.5rem;"><b>Phone Number</b></th>
            <th style="font-size: 1.5rem;"><b>Age</b></th>
        </tr>
        <xsl:for-each select="users/user">
            <tr bgcolor="#5BF0AA">
                <td><xsl:value-of select="name"/></td>
                <td><xsl:value-of select="email"/></td>
                <td><xsl:value-of select="phone"/></td>
                <td><xsl:value-of select="age"/></td>
            </tr>
        </xsl:for-each>
        </table>
        </center>
    </body>
    </html>
</xsl:template>

</xsl:stylesheet>