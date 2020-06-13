PROGRAM NameOfUser(INPUT, OUTPUT);
USES
  DOS;
VAR
  Name, Example, Checking: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Example:=GetEnv('QUERY_STRING');
  Checking:=Copy(Example, 1, 5);
  IF Checking = 'name='
  THEN
    BEGIN
      Delete(Example, 1, 5);
      IF Example <> ''
      THEN
        BEGIN
          WRITE('Hello, dear ');
          WRITE(Example);
          WRITELN('!')
        END
      ELSE
        WRITELN('Hello Anonymous!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END.
