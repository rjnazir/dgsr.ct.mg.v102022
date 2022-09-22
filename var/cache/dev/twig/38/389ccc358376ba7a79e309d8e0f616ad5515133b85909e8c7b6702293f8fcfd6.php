<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_320ec6fa7bec69c462a369b775a9ce8d7128c3fada4d465b5a6418c945378881 extends Twig_Template
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
        $__internal_a5932e5931559a891e2af23284722e00c750bf6bb483e3a5a838249e7f944a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5932e5931559a891e2af23284722e00c750bf6bb483e3a5a838249e7f944a69->enter($__internal_a5932e5931559a891e2af23284722e00c750bf6bb483e3a5a838249e7f944a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ffef4857c70678edff6b72f0836d4b053e19392b8276b0d81e8b63a124849705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffef4857c70678edff6b72f0836d4b053e19392b8276b0d81e8b63a124849705->enter($__internal_ffef4857c70678edff6b72f0836d4b053e19392b8276b0d81e8b63a124849705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a5932e5931559a891e2af23284722e00c750bf6bb483e3a5a838249e7f944a69->leave($__internal_a5932e5931559a891e2af23284722e00c750bf6bb483e3a5a838249e7f944a69_prof);

        
        $__internal_ffef4857c70678edff6b72f0836d4b053e19392b8276b0d81e8b63a124849705->leave($__internal_ffef4857c70678edff6b72f0836d4b053e19392b8276b0d81e8b63a124849705_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
