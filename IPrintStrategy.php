<?php

namespace  kuaminika\FormWriter;

interface IPrintStrategy
{
    function setReport(IReport $report);
    function getPrintTool():IPrintTool;
    function setPrintTool(IPrintTool $printTool);
    function execute();
}