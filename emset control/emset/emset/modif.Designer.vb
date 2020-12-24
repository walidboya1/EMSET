<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class modif
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(modif))
        Me.IDCompte = New System.Windows.Forms.Label()
        Me.Label10 = New System.Windows.Forms.Label()
        Me.user = New System.Windows.Forms.Label()
        Me.admin = New System.Windows.Forms.Label()
        Me.DataGridView1 = New System.Windows.Forms.DataGridView()
        Me.filiere = New System.Windows.Forms.ComboBox()
        Me.DateTimePicker1 = New System.Windows.Forms.DateTimePicker()
        Me.fodate = New System.Windows.Forms.ComboBox()
        Me.Modifier = New System.Windows.Forms.Button()
        Me.Button2 = New System.Windows.Forms.Button()
        Me.Annuler = New System.Windows.Forms.Button()
        Me.Label8 = New System.Windows.Forms.Label()
        Me.Label6 = New System.Windows.Forms.Label()
        Me.Label7 = New System.Windows.Forms.Label()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Inscription = New System.Windows.Forms.TextBox()
        Me.Bourse = New System.Windows.Forms.TextBox()
        Me.cin = New System.Windows.Forms.TextBox()
        Me.prenom = New System.Windows.Forms.TextBox()
        Me.Nom = New System.Windows.Forms.TextBox()
        Me.exporter = New System.Windows.Forms.Button()
        Me.SaveFileDialog1 = New System.Windows.Forms.SaveFileDialog()
        Me.Button1 = New System.Windows.Forms.Button()
        Me.Label9 = New System.Windows.Forms.Label()
        Me.TEL = New System.Windows.Forms.TextBox()
        Me.Button3 = New System.Windows.Forms.Button()
        Me.Button4 = New System.Windows.Forms.Button()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout
        '
        'IDCompte
        '
        Me.IDCompte.AutoSize = True
        Me.IDCompte.ForeColor = System.Drawing.Color.Blue
        Me.IDCompte.Location = New System.Drawing.Point(696, 447)
        Me.IDCompte.Name = "IDCompte"
        Me.IDCompte.Size = New System.Drawing.Size(19, 20)
        Me.IDCompte.TabIndex = 92
        Me.IDCompte.Text = "0"
        '
        'Label10
        '
        Me.Label10.AutoSize = True
        Me.Label10.Location = New System.Drawing.Point(650, 446)
        Me.Label10.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label10.Name = "Label10"
        Me.Label10.Size = New System.Drawing.Size(38, 20)
        Me.Label10.TabIndex = 91
        Me.Label10.Text = "ID :"
        '
        'user
        '
        Me.user.AutoSize = True
        Me.user.Location = New System.Drawing.Point(628, 225)
        Me.user.Name = "user"
        Me.user.Size = New System.Drawing.Size(44, 20)
        Me.user.TabIndex = 90
        Me.user.Text = "user"
        Me.user.Visible = False
        '
        'admin
        '
        Me.admin.AutoSize = True
        Me.admin.Location = New System.Drawing.Point(730, 224)
        Me.admin.Name = "admin"
        Me.admin.Size = New System.Drawing.Size(57, 20)
        Me.admin.TabIndex = 89
        Me.admin.Text = "admin"
        Me.admin.Visible = False
        '
        'DataGridView1
        '
        Me.DataGridView1.AllowUserToAddRows = False
        Me.DataGridView1.AllowUserToDeleteRows = False
        Me.DataGridView1.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill
        Me.DataGridView1.BackgroundColor = System.Drawing.Color.White
        Me.DataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridView1.EditMode = System.Windows.Forms.DataGridViewEditMode.EditOnEnter
        Me.DataGridView1.Location = New System.Drawing.Point(13, 10)
        Me.DataGridView1.Name = "DataGridView1"
        Me.DataGridView1.ReadOnly = True
        Me.DataGridView1.Size = New System.Drawing.Size(1274, 287)
        Me.DataGridView1.TabIndex = 88
        '
        'filiere
        '
        Me.filiere.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.filiere.FormattingEnabled = True
        Me.filiere.Items.AddRange(New Object() {"DTS - Développement Informatique", "DTS - Systèmes et Réseaux", "DTS - Gestion des Entreprises", "DTS - Financier Comptable", "DTS - Gestion en Transport et Logistique", "DT   - Exploitation en Transport et Logistique", "DT   - Gestion Informatisée", "DT   - Commercial", "DT   - Comptable", "DQ  - Opérateur de Saisie"})
        Me.filiere.Location = New System.Drawing.Point(654, 373)
        Me.filiere.Name = "filiere"
        Me.filiere.Size = New System.Drawing.Size(284, 28)
        Me.filiere.TabIndex = 6
        '
        'DateTimePicker1
        '
        Me.DateTimePicker1.CalendarFont = New System.Drawing.Font("Microsoft Sans Serif", 9.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.DateTimePicker1.CustomFormat = "yyyy-MM-dd"
        Me.DateTimePicker1.Format = System.Windows.Forms.DateTimePickerFormat.Custom
        Me.DateTimePicker1.Location = New System.Drawing.Point(203, 439)
        Me.DateTimePicker1.MinDate = New Date(2019, 1, 1, 0, 0, 0, 0)
        Me.DateTimePicker1.Name = "DateTimePicker1"
        Me.DateTimePicker1.Size = New System.Drawing.Size(363, 26)
        Me.DateTimePicker1.TabIndex = 9
        '
        'fodate
        '
        Me.fodate.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.fodate.FormattingEnabled = True
        Me.fodate.Items.AddRange(New Object() {"1 ANS", "2 ANS"})
        Me.fodate.Location = New System.Drawing.Point(203, 371)
        Me.fodate.Name = "fodate"
        Me.fodate.Size = New System.Drawing.Size(363, 28)
        Me.fodate.TabIndex = 5
        '
        'Modifier
        '
        Me.Modifier.Location = New System.Drawing.Point(1000, 304)
        Me.Modifier.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Modifier.Name = "Modifier"
        Me.Modifier.Size = New System.Drawing.Size(133, 77)
        Me.Modifier.TabIndex = 10
        Me.Modifier.Text = "Modifier "
        Me.Modifier.UseVisualStyleBackColor = True
        '
        'Button2
        '
        Me.Button2.Location = New System.Drawing.Point(1143, 304)
        Me.Button2.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Button2.Name = "Button2"
        Me.Button2.Size = New System.Drawing.Size(133, 77)
        Me.Button2.TabIndex = 11
        Me.Button2.Text = "Ajouter"
        Me.Button2.UseVisualStyleBackColor = True
        '
        'Annuler
        '
        Me.Annuler.Location = New System.Drawing.Point(1143, 389)
        Me.Annuler.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Annuler.Name = "Annuler"
        Me.Annuler.Size = New System.Drawing.Size(133, 75)
        Me.Annuler.TabIndex = 13
        Me.Annuler.Text = "Annuler"
        Me.Annuler.UseVisualStyleBackColor = True
        '
        'Label8
        '
        Me.Label8.AutoSize = True
        Me.Label8.Location = New System.Drawing.Point(52, 444)
        Me.Label8.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label8.Name = "Label8"
        Me.Label8.Size = New System.Drawing.Size(147, 20)
        Me.Label8.TabIndex = 81
        Me.Label8.Text = "Date Inscription :"
        '
        'Label6
        '
        Me.Label6.AutoSize = True
        Me.Label6.Location = New System.Drawing.Point(73, 409)
        Me.Label6.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label6.Name = "Label6"
        Me.Label6.Size = New System.Drawing.Size(126, 20)
        Me.Label6.TabIndex = 80
        Me.Label6.Text = "N° Inscription :"
        '
        'Label7
        '
        Me.Label7.AutoSize = True
        Me.Label7.Location = New System.Drawing.Point(12, 374)
        Me.Label7.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Label7.Name = "Label7"
        Me.Label7.Size = New System.Drawing.Size(186, 20)
        Me.Label7.TabIndex = 82
        Me.Label7.Text = "Années de formation :"
        '
        'Label5
        '
        Me.Label5.AutoSize = True
        Me.Label5.Location = New System.Drawing.Point(574, 411)
        Me.Label5.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(76, 20)
        Me.Label5.TabIndex = 79
        Me.Label5.Text = "Bourse :"
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(581, 376)
        Me.Label4.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(68, 20)
        Me.Label4.TabIndex = 78
        Me.Label4.Text = "Filière :"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(600, 343)
        Me.Label3.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(49, 20)
        Me.Label3.TabIndex = 77
        Me.Label3.Text = "CIN :"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(569, 309)
        Me.Label2.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(80, 20)
        Me.Label2.TabIndex = 76
        Me.Label2.Text = "Prenom :"
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(143, 307)
        Me.Label1.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(55, 20)
        Me.Label1.TabIndex = 73
        Me.Label1.Text = "Nom :"
        '
        'Inscription
        '
        Me.Inscription.Location = New System.Drawing.Point(203, 406)
        Me.Inscription.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Inscription.Name = "Inscription"
        Me.Inscription.Size = New System.Drawing.Size(309, 26)
        Me.Inscription.TabIndex = 7
        '
        'Bourse
        '
        Me.Bourse.Location = New System.Drawing.Point(654, 408)
        Me.Bourse.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Bourse.Name = "Bourse"
        Me.Bourse.Size = New System.Drawing.Size(338, 26)
        Me.Bourse.TabIndex = 8
        '
        'cin
        '
        Me.cin.Location = New System.Drawing.Point(654, 340)
        Me.cin.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.cin.Name = "cin"
        Me.cin.Size = New System.Drawing.Size(284, 26)
        Me.cin.TabIndex = 4
        '
        'prenom
        '
        Me.prenom.Location = New System.Drawing.Point(654, 304)
        Me.prenom.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.prenom.Name = "prenom"
        Me.prenom.Size = New System.Drawing.Size(338, 26)
        Me.prenom.TabIndex = 2
        '
        'Nom
        '
        Me.Nom.Location = New System.Drawing.Point(203, 304)
        Me.Nom.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.Nom.Name = "Nom"
        Me.Nom.Size = New System.Drawing.Size(363, 26)
        Me.Nom.TabIndex = 1
        '
        'exporter
        '
        Me.exporter.Location = New System.Drawing.Point(1000, 389)
        Me.exporter.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.exporter.Name = "exporter"
        Me.exporter.Size = New System.Drawing.Size(133, 77)
        Me.exporter.TabIndex = 12
        Me.exporter.Text = "Exporter"
        Me.exporter.UseVisualStyleBackColor = True
        '
        'SaveFileDialog1
        '
        Me.SaveFileDialog1.Filter = "Fichier Excel|*.xlsx"
        '
        'Button1
        '
        Me.Button1.Location = New System.Drawing.Point(944, 340)
        Me.Button1.Name = "Button1"
        Me.Button1.Size = New System.Drawing.Size(48, 26)
        Me.Button1.TabIndex = 94
        Me.Button1.Text = "***"
        Me.Button1.UseVisualStyleBackColor = True
        '
        'Label9
        '
        Me.Label9.AutoSize = True
        Me.Label9.Location = New System.Drawing.Point(148, 341)
        Me.Label9.Margin = New System.Windows.Forms.Padding(5, 0, 5, 0)
        Me.Label9.Name = "Label9"
        Me.Label9.Size = New System.Drawing.Size(51, 20)
        Me.Label9.TabIndex = 96
        Me.Label9.Text = "TEL :"
        '
        'TEL
        '
        Me.TEL.Location = New System.Drawing.Point(203, 338)
        Me.TEL.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.TEL.Name = "TEL"
        Me.TEL.Size = New System.Drawing.Size(363, 26)
        Me.TEL.TabIndex = 3
        '
        'Button3
        '
        Me.Button3.Location = New System.Drawing.Point(520, 405)
        Me.Button3.Name = "Button3"
        Me.Button3.Size = New System.Drawing.Size(46, 26)
        Me.Button3.TabIndex = 97
        Me.Button3.Text = "***"
        Me.Button3.UseVisualStyleBackColor = True
        '
        'Button4
        '
        Me.Button4.Location = New System.Drawing.Point(944, 373)
        Me.Button4.Name = "Button4"
        Me.Button4.Size = New System.Drawing.Size(48, 28)
        Me.Button4.TabIndex = 98
        Me.Button4.Text = "***"
        Me.Button4.UseVisualStyleBackColor = True
        '
        'modif
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 20.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(1298, 475)
        Me.Controls.Add(Me.Button4)
        Me.Controls.Add(Me.Button3)
        Me.Controls.Add(Me.Label9)
        Me.Controls.Add(Me.TEL)
        Me.Controls.Add(Me.Button1)
        Me.Controls.Add(Me.exporter)
        Me.Controls.Add(Me.IDCompte)
        Me.Controls.Add(Me.Label10)
        Me.Controls.Add(Me.user)
        Me.Controls.Add(Me.admin)
        Me.Controls.Add(Me.DataGridView1)
        Me.Controls.Add(Me.filiere)
        Me.Controls.Add(Me.DateTimePicker1)
        Me.Controls.Add(Me.fodate)
        Me.Controls.Add(Me.Modifier)
        Me.Controls.Add(Me.Button2)
        Me.Controls.Add(Me.Annuler)
        Me.Controls.Add(Me.Label8)
        Me.Controls.Add(Me.Label6)
        Me.Controls.Add(Me.Label7)
        Me.Controls.Add(Me.Label5)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.Inscription)
        Me.Controls.Add(Me.Bourse)
        Me.Controls.Add(Me.cin)
        Me.Controls.Add(Me.prenom)
        Me.Controls.Add(Me.Nom)
        Me.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Margin = New System.Windows.Forms.Padding(5)
        Me.MaximizeBox = False
        Me.Name = "modif"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout

    End Sub

    Friend WithEvents IDCompte As Label
    Friend WithEvents Label10 As Label
    Friend WithEvents user As Label
    Friend WithEvents admin As Label
    Friend WithEvents DataGridView1 As DataGridView
    Friend WithEvents filiere As ComboBox
    Friend WithEvents DateTimePicker1 As DateTimePicker
    Friend WithEvents fodate As ComboBox
    Friend WithEvents Modifier As Button
    Friend WithEvents Button2 As Button
    Friend WithEvents Annuler As Button
    Friend WithEvents Label8 As Label
    Friend WithEvents Label6 As Label
    Friend WithEvents Label7 As Label
    Friend WithEvents Label5 As Label
    Friend WithEvents Label4 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Label1 As Label
    Friend WithEvents Inscription As TextBox
    Friend WithEvents Bourse As TextBox
    Friend WithEvents cin As TextBox
    Friend WithEvents prenom As TextBox
    Friend WithEvents Nom As TextBox
    Friend WithEvents exporter As Button
    Friend WithEvents SaveFileDialog1 As SaveFileDialog
    Friend WithEvents Button1 As Button
    Friend WithEvents Label9 As Label
    Friend WithEvents TEL As TextBox
    Friend WithEvents Button3 As Button
    Friend WithEvents Button4 As Button
End Class
