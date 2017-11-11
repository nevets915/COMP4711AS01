<h1>Task # {id}</h1>
<form role="form" action="/fleet/submit" method="post">
    {fid}
    {fmanufacturer}
    <br/>
    {fmodel}
    {fseats}
    <br/>
    {freach}
    {fcruise}
    <br/>
    {ftakeoff}
    {fhourly}
    <br/>
    {zsubmit}
    <a href="/fleet/cancel"><input type="button" value="Cancel the current edit"/></a>
    <a href="/fleet/delete"><input type="button" value="Delete this flight"/></a>  
</form>
    {error}