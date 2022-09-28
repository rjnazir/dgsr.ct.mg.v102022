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
        $__internal_bbf032bea2297be03e90c3185339610e384f887e322adb1f915df0065a351e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf032bea2297be03e90c3185339610e384f887e322adb1f915df0065a351e61->enter($__internal_bbf032bea2297be03e90c3185339610e384f887e322adb1f915df0065a351e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ecae9a9ac89cb80dfd4a85be7124556b0fc289fb482867612e9b7c61239eb506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecae9a9ac89cb80dfd4a85be7124556b0fc289fb482867612e9b7c61239eb506->enter($__internal_ecae9a9ac89cb80dfd4a85be7124556b0fc289fb482867612e9b7c61239eb506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bbf032bea2297be03e90c3185339610e384f887e322adb1f915df0065a351e61->leave($__internal_bbf032bea2297be03e90c3185339610e384f887e322adb1f915df0065a351e61_prof);

        
        $__internal_ecae9a9ac89cb80dfd4a85be7124556b0fc289fb482867612e9b7c61239eb506->leave($__internal_ecae9a9ac89cb80dfd4a85be7124556b0fc289fb482867612e9b7c61239eb506_prof);

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
