<!DOCTYPE html>
<html>
<head>
    <title>Acte Volontaire Reminder</title>
</head>
<body>
    <h1>Reminder: Your Upcoming Acte Volontaire</h1>
    <p>Hello {{ $acte->participant_name }},</p>
    <p>Your registered Acte Volontaire titled "{{ $acte->titre }}" is scheduled for {{ $acte->date }} at {{ $acte->heure }}.</p>
    <p>Don't forget to attend!</p>
</body>
</html>
