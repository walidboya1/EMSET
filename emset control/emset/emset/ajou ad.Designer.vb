﻿<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class ajou_ad
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
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
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(ajou_ad))
        Me.Nom = New System.Windows.Forms.TextBox()
        Me.prenom = New System.Windows.Forms.TextBox()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.cin = New System.Windows.Forms.TextBox()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.Label6 = New System.Windows.Forms.Label()
        Me.filiere = New System.Windows.Forms.ComboBox()
        Me.Label7 = New System.Windows.Forms.Label()
        Me.Label8 = New System.Windows.Forms.Label()
        Me.Ajouter = New System.Windows.Forms.Button()
        Me.Annuler = New System.Windows.Forms.Button()
        Me.DateTimePicker1 = New System.Windows.Forms.DateTimePicker()
        Me.bourse = New System.Windows.Forms.ComboBox()
        Me.Label9 = New System.Windows.Forms.Label()
        Me.Observation = New System.Windows.Forms.TextBox()
        Me.erreur = New System.Windows.Forms.Label()
        Me.fodate = New System.Windows.Forms.ComboBox()
        Me.user = New System.Windows.Forms.Label()
        Me.admin = New System.Windows.Forms.Label()
        Me.Inscription = New System.Windows.Forms.TextBox()
        Me.Label10 = New System.Windows.Forms.Label()
        Me.tel = New System.Windows.Forms.TextBox()
        Me.SuspendLayout
        '
        'Nom
        '
        Me.Nom.Location = New System.Drawing.Point(204, 29)
        Me.Nom.Name = "Nom"
        Me.Nom.Size = New System.Drawing.Size(251, 26)
        Me.Nom.TabIndex = 0
        '
        'prenom
        '
        Me.prenom.Location = New System.Drawing.Point(204, 61)
        Me.prenom.Name = "prenom"
        Me.prenom.Size = New System.Drawing.Size(251, 26)
        Me.prenom.TabIndex = 1
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(144, 32)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(55, 20)
        Me.Label1.TabIndex = 2
        Me.Label1.Text = "Nom :"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(123, 64)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(80, 20)
        Me.Label2.TabIndex = 2
        Me.Label2.Text = "Prenom :"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(148, 96)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(49, 20)
        Me.Label3.TabIndex = 2
        Me.Label3.Text = "CIN :"
        '
        'cin
        '
        Me.cin.Location = New System.Drawing.Point(204, 93)
        Me.cin.Name = "cin"
        Me.cin.Size = New System.Drawing.Size(251, 26)
        Me.cin.TabIndex = 2
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(132, 160)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(68, 20)
        Me.Label4.TabIndex = 2
        Me.Label4.Text = "Filière :"
        '
        'Label5
        '
        Me.Label5.AutoSize = True
        Me.Label5.Location = New System.Drawing.Point(124, 228)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(76, 20)
        Me.Label5.TabIndex = 2
        Me.Label5.Text = "Bourse :"
        '
        'Label6
        '
        Me.Label6.AutoSize = True
        Me.Label6.Location = New System.Drawing.Point(77, 292)
        Me.Label6.Name = "Label6"
        Me.Label6.Size = New System.Drawing.Size(126, 20)
        Me.Label6.TabIndex = 2
        Me.Label6.Text = "N° Inscription :"
        '
        'filiere
        '
        Me.filiere.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.filiere.FormattingEnabled = True
        Me.filiere.Items.AddRange(New Object() {"DTS - Développement Informatique", "DTS - Systèmes et Réseaux", "DTS - Gestion des Entreprises", "DTS - Financier Comptable", "DTS - Gestion en Transport et Logistique", "DT   - Exploitation en Transport et Logistique", "DT   - Gestion Informatisée", "DT   - Commercial", "DT   - Comptable", "DQ  - Opérateur de Saisie"})
        Me.filiere.Location = New System.Drawing.Point(204, 157)
        Me.filiere.Name = "filiere"
        Me.filiere.Size = New System.Drawing.Size(251, 28)
        Me.filiere.TabIndex = 5
        '
        'Label7
        '
        Me.Label7.AutoSize = True
        Me.Label7.Location = New System.Drawing.Point(11, 194)
        Me.Label7.Margin = New System.Windows.Forms.Padding(3)
        Me.Label7.Name = "Label7"
        Me.Label7.Size = New System.Drawing.Size(186, 20)
        Me.Label7.TabIndex = 2
        Me.Label7.Text = "Années de formation :"
        '
        'Label8
        '
        Me.Label8.AutoSize = True
        Me.Label8.Location = New System.Drawing.Point(61, 327)
        Me.Label8.Name = "Label8"
        Me.Label8.Size = New System.Drawing.Size(147, 20)
        Me.Label8.TabIndex = 2
        Me.Label8.Text = "Date Inscription :"
        '
        'Ajouter
        '
        Me.Ajouter.Location = New System.Drawing.Point(269, 353)
        Me.Ajouter.Name = "Ajouter"
        Me.Ajouter.Size = New System.Drawing.Size(186, 31)
        Me.Ajouter.TabIndex = 17
        Me.Ajouter.Text = "Ajouter"
        Me.Ajouter.UseVisualStyleBackColor = True
        '
        'Annuler
        '
        Me.Annuler.Location = New System.Drawing.Point(32, 351)
        Me.Annuler.Name = "Annuler"
        Me.Annuler.Size = New System.Drawing.Size(186, 31)
        Me.Annuler.TabIndex = 18
        Me.Annuler.Text = "Annuler"
        Me.Annuler.UseVisualStyleBackColor = True
        '
        'DateTimePicker1
        '
        Me.DateTimePicker1.CalendarFont = New System.Drawing.Font("Microsoft Sans Serif", 9.0!, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.DateTimePicker1.CustomFormat = "yyyy-MM-dd"
        Me.DateTimePicker1.Format = System.Windows.Forms.DateTimePickerFormat.Custom
        Me.DateTimePicker1.Location = New System.Drawing.Point(204, 321)
        Me.DateTimePicker1.MinDate = New Date(2019, 1, 1, 0, 0, 0, 0)
        Me.DateTimePicker1.Name = "DateTimePicker1"
        Me.DateTimePicker1.Size = New System.Drawing.Size(251, 26)
        Me.DateTimePicker1.TabIndex = 16
        '
        'bourse
        '
        Me.bourse.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.bourse.FormattingEnabled = True
        Me.bourse.Items.AddRange(New Object() {"Oui", "Non"})
        Me.bourse.Location = New System.Drawing.Point(204, 225)
        Me.bourse.Name = "bourse"
        Me.bourse.Size = New System.Drawing.Size(251, 28)
        Me.bourse.TabIndex = 13
        '
        'Label9
        '
        Me.Label9.AutoSize = True
        Me.Label9.Location = New System.Drawing.Point(91, 260)
        Me.Label9.Name = "Label9"
        Me.Label9.Size = New System.Drawing.Size(115, 20)
        Me.Label9.TabIndex = 2
        Me.Label9.Text = "Observation :"
        '
        'Observation
        '
        Me.Observation.Location = New System.Drawing.Point(204, 257)
        Me.Observation.Multiline = True
        Me.Observation.Name = "Observation"
        Me.Observation.Size = New System.Drawing.Size(251, 26)
        Me.Observation.TabIndex = 14
        '
        'erreur
        '
        Me.erreur.AutoSize = True
        Me.erreur.Location = New System.Drawing.Point(28, 67)
        Me.erreur.Name = "erreur"
        Me.erreur.Size = New System.Drawing.Size(73, 20)
        Me.erreur.TabIndex = 19
        Me.erreur.Text = "Label10"
        Me.erreur.Visible = False
        '
        'fodate
        '
        Me.fodate.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList
        Me.fodate.FormattingEnabled = True
        Me.fodate.Items.AddRange(New Object() {"1 ANS", "2 ANS"})
        Me.fodate.Location = New System.Drawing.Point(205, 191)
        Me.fodate.Name = "fodate"
        Me.fodate.Size = New System.Drawing.Size(251, 28)
        Me.fodate.TabIndex = 6
        '
        'user
        '
        Me.user.AutoSize = True
        Me.user.Location = New System.Drawing.Point(32, 41)
        Me.user.Name = "user"
        Me.user.Size = New System.Drawing.Size(44, 20)
        Me.user.TabIndex = 21
        Me.user.Text = "user"
        Me.user.Visible = False
        '
        'admin
        '
        Me.admin.AutoSize = True
        Me.admin.Location = New System.Drawing.Point(28, 99)
        Me.admin.Name = "admin"
        Me.admin.Size = New System.Drawing.Size(57, 20)
        Me.admin.TabIndex = 22
        Me.admin.Text = "admin"
        Me.admin.Visible = False
        '
        'Inscription
        '
        Me.Inscription.Location = New System.Drawing.Point(204, 289)
        Me.Inscription.Name = "Inscription"
        Me.Inscription.Size = New System.Drawing.Size(251, 26)
        Me.Inscription.TabIndex = 15
        '
        'Label10
        '
        Me.Label10.AutoSize = True
        Me.Label10.Location = New System.Drawing.Point(148, 128)
        Me.Label10.Name = "Label10"
        Me.Label10.Size = New System.Drawing.Size(51, 20)
        Me.Label10.TabIndex = 23
        Me.Label10.Text = "TEL :"
        '
        'tel
        '
        Me.tel.Location = New System.Drawing.Point(204, 125)
        Me.tel.Name = "tel"
        Me.tel.Size = New System.Drawing.Size(251, 26)
        Me.tel.TabIndex = 4
        '
        'ajou_ad
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 20.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(486, 391)
        Me.Controls.Add(Me.Label10)
        Me.Controls.Add(Me.tel)
        Me.Controls.Add(Me.admin)
        Me.Controls.Add(Me.user)
        Me.Controls.Add(Me.fodate)
        Me.Controls.Add(Me.erreur)
        Me.Controls.Add(Me.Ajouter)
        Me.Controls.Add(Me.Annuler)
        Me.Controls.Add(Me.DateTimePicker1)
        Me.Controls.Add(Me.Observation)
        Me.Controls.Add(Me.Inscription)
        Me.Controls.Add(Me.bourse)
        Me.Controls.Add(Me.filiere)
        Me.Controls.Add(Me.Label9)
        Me.Controls.Add(Me.Label8)
        Me.Controls.Add(Me.Label6)
        Me.Controls.Add(Me.Label7)
        Me.Controls.Add(Me.Label5)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.cin)
        Me.Controls.Add(Me.prenom)
        Me.Controls.Add(Me.Nom)
        Me.Font = New System.Drawing.Font("Microsoft Sans Serif", 12.0!, System.Drawing.FontStyle.Bold)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle
        Me.Icon = CType(resources.GetObject("$this.Icon"), System.Drawing.Icon)
        Me.Margin = New System.Windows.Forms.Padding(5, 4, 5, 4)
        Me.MaximizeBox = False
        Me.Name = "ajou_ad"
        Me.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen
        Me.ResumeLayout(False)
        Me.PerformLayout

    End Sub

    Friend WithEvents Nom As TextBox
    Friend WithEvents prenom As TextBox
    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents cin As TextBox
    Friend WithEvents Label4 As Label
    Friend WithEvents Label5 As Label
    Friend WithEvents Label6 As Label
    Friend WithEvents filiere As ComboBox
    Friend WithEvents Label7 As Label
    Friend WithEvents Label8 As Label
    Friend WithEvents Ajouter As Button
    Friend WithEvents Annuler As Button
    Friend WithEvents DateTimePicker1 As DateTimePicker
    Friend WithEvents bourse As ComboBox
    Friend WithEvents Label9 As Label
    Friend WithEvents Observation As TextBox
    Friend WithEvents erreur As Label
    Friend WithEvents fodate As ComboBox
    Friend WithEvents user As Label
    Friend WithEvents admin As Label
    Friend WithEvents Inscription As TextBox
    Friend WithEvents Label10 As Label
    Friend WithEvents tel As TextBox
End Class