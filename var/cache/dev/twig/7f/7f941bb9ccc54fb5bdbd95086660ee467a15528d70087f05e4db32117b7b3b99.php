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
        $__internal_1859df2d956fcdd27ab88fd0c847a818cf4a200ec105fcd4a167108c52958240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1859df2d956fcdd27ab88fd0c847a818cf4a200ec105fcd4a167108c52958240->enter($__internal_1859df2d956fcdd27ab88fd0c847a818cf4a200ec105fcd4a167108c52958240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_210dc1a8b921d13670f20a246cab661e5b7901a04c418dfa06d78670fb41f2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210dc1a8b921d13670f20a246cab661e5b7901a04c418dfa06d78670fb41f2b2->enter($__internal_210dc1a8b921d13670f20a246cab661e5b7901a04c418dfa06d78670fb41f2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1859df2d956fcdd27ab88fd0c847a818cf4a200ec105fcd4a167108c52958240->leave($__internal_1859df2d956fcdd27ab88fd0c847a818cf4a200ec105fcd4a167108c52958240_prof);

        
        $__internal_210dc1a8b921d13670f20a246cab661e5b7901a04c418dfa06d78670fb41f2b2->leave($__internal_210dc1a8b921d13670f20a246cab661e5b7901a04c418dfa06d78670fb41f2b2_prof);

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
