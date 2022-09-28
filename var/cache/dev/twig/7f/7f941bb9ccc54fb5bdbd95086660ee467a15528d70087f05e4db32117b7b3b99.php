<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7e9047f046ab495d6ac7c06784c53c4980749971e3965acc0e0209201e1bee54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f63892b37c3e03327c21894b34f6cad782e4ec8ad86d09c902a6f89dd49516b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f63892b37c3e03327c21894b34f6cad782e4ec8ad86d09c902a6f89dd49516b->enter($__internal_7f63892b37c3e03327c21894b34f6cad782e4ec8ad86d09c902a6f89dd49516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_75f61062cb3e1dd5ca97c5f8b6322425d8a75dd15723869f0b0c5c693b3b16c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f61062cb3e1dd5ca97c5f8b6322425d8a75dd15723869f0b0c5c693b3b16c5->enter($__internal_75f61062cb3e1dd5ca97c5f8b6322425d8a75dd15723869f0b0c5c693b3b16c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7f63892b37c3e03327c21894b34f6cad782e4ec8ad86d09c902a6f89dd49516b->leave($__internal_7f63892b37c3e03327c21894b34f6cad782e4ec8ad86d09c902a6f89dd49516b_prof);

        
        $__internal_75f61062cb3e1dd5ca97c5f8b6322425d8a75dd15723869f0b0c5c693b3b16c5->leave($__internal_75f61062cb3e1dd5ca97c5f8b6322425d8a75dd15723869f0b0c5c693b3b16c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
