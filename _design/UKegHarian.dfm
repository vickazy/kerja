object FDataSKP: TFDataSKP
  Left = 627
  Top = 141
  Width = 440
  Height = 513
  Caption = 'FKegLain'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object GroupBox1: TGroupBox
    Left = 16
    Top = 16
    Width = 393
    Height = 97
    Caption = 'Data'
    TabOrder = 0
    object Label1: TLabel
      Left = 16
      Top = 24
      Width = 42
      Height = 13
      Caption = 'Kegiatan'
    end
    object Edit1: TEdit
      Left = 72
      Top = 24
      Width = 305
      Height = 21
      TabOrder = 0
      Text = 'Edit1'
    end
    object Button1: TButton
      Left = 168
      Top = 56
      Width = 57
      Height = 25
      Caption = 'Simpan'
      TabOrder = 1
    end
    object Button2: TButton
      Left = 240
      Top = 56
      Width = 57
      Height = 25
      Caption = 'Edit'
      TabOrder = 2
    end
    object Button3: TButton
      Left = 312
      Top = 56
      Width = 57
      Height = 25
      Caption = 'Hapus'
      TabOrder = 3
    end
  end
  object DBGrid1: TDBGrid
    Left = 17
    Top = 126
    Width = 392
    Height = 299
    TabOrder = 1
    TitleFont.Charset = DEFAULT_CHARSET
    TitleFont.Color = clWindowText
    TitleFont.Height = -11
    TitleFont.Name = 'MS Sans Serif'
    TitleFont.Style = []
    Columns = <
      item
        Expanded = False
        Title.Caption = 'No'
        Width = 30
        Visible = True
      end
      item
        Expanded = False
        Title.Caption = 'Kegiatan'
        Width = 150
        Visible = True
      end>
  end
  object Button4: TButton
    Left = 328
    Top = 432
    Width = 75
    Height = 25
    Caption = 'Pilih'
    TabOrder = 2
  end
end
