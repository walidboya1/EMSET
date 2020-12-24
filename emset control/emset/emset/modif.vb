Imports MySql.Data.MySqlClient
Imports System.Linq
Imports System.Data.SqlClient
Imports System.Data.OleDb
Imports Microsoft.Office.Core
Imports Excel = Microsoft.Office.Interop.Excel
Imports ExcelAutoFormat = Microsoft.Office.Interop.Excel.XlRangeAutoFormat
Imports Microsoft.Office.Interop
Imports System.IO
Imports System.Xml.XPath
Imports System.Data
Imports System.Xml
Public Class modif
    Sub act()
        Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
        Dim MysqlAdapter As New MySqlDataAdapter
        Dim DatabaseSet As New DataTable
        Dim Source As New BindingSource
        Try
            MySqlConnection.Open()
            Dim Query As String
            Query = "SELECT id,nom,prenom,duree,cin,filiere,Inscription,Bourse,date,TEL FROM emset.stagiaire"
            Dim Command As New MySqlCommand
            Command = New MySqlCommand(Query, MySqlConnection)
            MysqlAdapter.SelectCommand = Command
            MysqlAdapter.Fill(DatabaseSet)
            DataGridView1.DataSource = DatabaseSet
            MysqlAdapter.Update(DatabaseSet)

            MySqlConnection.Close()
        Catch ex As Exception
            MessageBox.Show(ex.Message)
        Finally
            MySqlConnection.Dispose()
        End Try
    End Sub
    Sub rech()
        Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
        Dim MysqlAdapter As New MySqlDataAdapter
        Dim DatabaseSet As New DataTable
        Dim Source As New BindingSource
        Try
            MySqlConnection.Open()
            Dim Query As String
            Query = "SELECT id,nom,prenom,duree,cin,filiere,Inscription,Bourse,date,TEL FROM emset.stagiaire WHERE cin ='" & cin.Text & "'"
            Dim Command As New MySqlCommand
            Command = New MySqlCommand(Query, MySqlConnection)
            MysqlAdapter.SelectCommand = Command
            MysqlAdapter.Fill(DatabaseSet)
            DataGridView1.DataSource = DatabaseSet
            MysqlAdapter.Update(DatabaseSet)

            MySqlConnection.Close()
        Catch ex As Exception
            MessageBox.Show(ex.Message)
        Finally
            MySqlConnection.Dispose()
        End Try
    End Sub
    Sub rech2()
        Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
        Dim MysqlAdapter As New MySqlDataAdapter
        Dim DatabaseSet As New DataTable
        Dim Source As New BindingSource
        Try
            MySqlConnection.Open()
            Dim Query As String
            Query = "SELECT id,nom,prenom,duree,cin,filiere,Inscription,Bourse,date,TEL FROM emset.stagiaire WHERE Inscription ='" & Inscription.Text & "'"
            Dim Command As New MySqlCommand
            Command = New MySqlCommand(Query, MySqlConnection)
            MysqlAdapter.SelectCommand = Command
            MysqlAdapter.Fill(DatabaseSet)
            DataGridView1.DataSource = DatabaseSet
            MysqlAdapter.Update(DatabaseSet)

            MySqlConnection.Close()
        Catch ex As Exception
            MessageBox.Show(ex.Message)
        Finally
            MySqlConnection.Dispose()
        End Try
    End Sub
    Sub rech3()
        Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
        Dim MysqlAdapter As New MySqlDataAdapter
        Dim DatabaseSet As New DataTable
        Dim Source As New BindingSource
        Try
            MySqlConnection.Open()
            Dim Query As String
            Query = "SELECT id,nom,prenom,duree,cin,filiere,Inscription,Bourse,date,TEL FROM emset.stagiaire WHERE filiere ='" & filiere.Text & "'"
            Dim Command As New MySqlCommand
            Command = New MySqlCommand(Query, MySqlConnection)
            MysqlAdapter.SelectCommand = Command
            MysqlAdapter.Fill(DatabaseSet)
            DataGridView1.DataSource = DatabaseSet
            MysqlAdapter.Update(DatabaseSet)

            MySqlConnection.Close()
        Catch ex As Exception
            MessageBox.Show(ex.Message)
        Finally
            MySqlConnection.Dispose()
        End Try
    End Sub
    Private Sub DataGridView1_CellContentClick(sender As Object, e As DataGridViewCellEventArgs) Handles DataGridView1.CellContentClick
        If e.RowIndex >= 0 Then
            Dim row As DataGridViewRow
            row = Me.DataGridView1.Rows(e.RowIndex)
            IDCompte.Text = row.Cells("id").Value.ToString
            TEL.Text = row.Cells("TEL").Value.ToString
            Nom.Text = row.Cells("nom").Value.ToString
            prenom.Text = row.Cells("prenom").Value.ToString
            fodate.Text = row.Cells("duree").Value.ToString
            cin.Text = row.Cells("cin").Value.ToString
            filiere.Text = row.Cells("filiere").Value.ToString
            Inscription.Text = row.Cells("Inscription").Value.ToString
            Bourse.Text = row.Cells("Bourse").Value.ToString
            DateTimePicker1.Text = row.Cells("date").Value.ToString

        End If
    End Sub

    Private Sub Modif_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        act()
    End Sub

    Private Sub Modifier_Click(sender As Object, e As EventArgs) Handles Modifier.Click
        If user.Text = "" Or prenom.Text = "" Or cin.Text = "" Or filiere.Text = "" Or Inscription.Text = "" Or Bourse.Text = "" Or fodate.Text = "" Or Nom.Text = "" Then
            MsgBox("Remplissez tous les champs, s'il vous plaît", MsgBoxStyle.Critical)
        Else
            Dim UserRec = user.Text
            Dim MySqlConnection As New MySqlConnection("server=169.254.39.28;Port=3306;userid=walid;password=1234;database=emset")
            Dim Reader As MySqlDataReader
            Dim COMMAND As New MySqlCommand
            Try
                MySqlConnection.Open()
                Dim Query As String
                Query = "UPDATE emset.stagiaire SET Inscription='" & Inscription.Text & "',filiere='" & filiere.Text & "',duree='" & fodate.Text & "',nom='" & Nom.Text & "',prenom='" & prenom.Text & "',cin='" & cin.Text & "',Bourse='" & Bourse.Text & "',date='" & DateTimePicker1.Text & "',user='" & user.Text & "',TEL='" & TEL.Text & "'WHERE id='" & IDCompte.Text & "'"
                COMMAND = New MySqlCommand(Query, MySqlConnection)
                Reader = COMMAND.ExecuteReader
                MsgBox("Les informations ont été changé")
                MySqlConnection.Close()
            Catch ex As Exception
                MessageBox.Show(ex.Message)
            Finally
                MySqlConnection.Dispose()
            End Try
        End If

        act()
    End Sub

    Private Sub Annuler_Click(sender As Object, e As EventArgs) Handles Annuler.Click
        If admin.Text = "yes" Then
            inter_ad.user.Text = user.Text
            inter_ad.Show()
            Me.Close()
        Else
            inter.user.Text = user.Text
            inter.Show()
            Me.Close()
        End If
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        ajou.user.Text = user.Text
        ajou.Show()
        Me.Close()
    End Sub

    Private Sub Exporter_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles exporter.Click
        If SaveFileDialog1.ShowDialog = DialogResult.OK Then
            Dim save As String
            save = SaveFileDialog1.FileName
            Try
                If File.Exists(save) Then
                    File.Delete(save)
                End If


                Dim xlApp As Microsoft.Office.Interop.Excel.Application
                Dim xlWorkBook As Microsoft.Office.Interop.Excel.Workbook
                Dim xlWorkSheet As Microsoft.Office.Interop.Excel.Worksheet
                Dim misValue As Object = System.Reflection.Missing.Value
                Dim i As Integer
                Dim j As Integer

                xlApp = New Excel.Application
                xlWorkBook = xlApp.Workbooks.Add(misValue)
                xlWorkSheet = xlWorkBook.Sheets("Feuil1")


                For i = 0 To DataGridView1.RowCount - 1
                    For j = 0 To DataGridView1.ColumnCount - 1
                        For k As Integer = 1 To DataGridView1.Columns.Count
                            xlWorkSheet.Cells(1, k) = DataGridView1.Columns(k - 1).HeaderText
                            xlWorkSheet.Cells(i + 2, j + 1) = DataGridView1(j, i).Value.ToString()
                        Next
                    Next
                Next

                xlWorkSheet.SaveAs(save)
                xlWorkBook.Close()
                xlApp.Quit()

                releaseObject(xlApp)
                releaseObject(xlWorkBook)
                releaseObject(xlWorkSheet)

                Process.Start(save)
            Catch ex As Exception
                MessageBox.Show(ex.Message)
            End Try
        End If
    End Sub

    Private Sub releaseObject(ByVal obj As Object)
        Try
            System.Runtime.InteropServices.Marshal.ReleaseComObject(obj)
            obj = Nothing
        Catch ex As Exception
            obj = Nothing
        Finally
            GC.Collect()
        End Try
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        If cin.Text = "" Then
            act()
        Else
            rech()
        End If
    End Sub

    Private Sub Inscription_KeyPress(sender As Object, e As KeyPressEventArgs) Handles Inscription.KeyPress
        If Asc(e.KeyChar) = 13 And Inscription.Text <> "" Then
            rech2()
        Else
            act()
        End If
    End Sub

    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
        If Inscription.Text = "" Then
            act()
        Else
            rech2()
        End If
    End Sub

    Private Sub Button4_Click(sender As Object, e As EventArgs) Handles Button4.Click
        If filiere.Text = "" Then
            act()
        Else
            rech3()
        End If
    End Sub

    Private Sub Cin_KeyPress(sender As Object, e As KeyPressEventArgs) Handles cin.KeyPress
        If Asc(e.KeyChar) = 13 And cin.Text <> "" Then
            rech()
        Else
            act()
        End If
    End Sub
End Class