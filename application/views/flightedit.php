<h1>Task # {id}</h1>
<form role="form" action="/flight/submit" method="post">
    {fid}
    {farrivalairport}
    <br/>
    {fdeparteairport}
    {fplaneid}
    <br/>
    {fdeparturetime}
    {farrivaltime}
    <br/>
    {zsubmit}
    <a href="/flight/cancel"><input type="button" value="Cancel the current edit"/></a>
    <a href="/flight/delete"><input type="button" value="Delete this flight"/></a>  
</form>
    {error}