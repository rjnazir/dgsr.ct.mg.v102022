<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd384c6d9a2f883242f7bb3185ac40d4bc03081dd15f359211d22deba2240acb extends Twig_Template
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
        $__internal_c7050158702e6439ff5f3d71866f1ccbcf94c66191c237ec715abab4dbdce54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7050158702e6439ff5f3d71866f1ccbcf94c66191c237ec715abab4dbdce54a->enter($__internal_c7050158702e6439ff5f3d71866f1ccbcf94c66191c237ec715abab4dbdce54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f8241eb2be50670ad75e6b1370d56d2947742b4f98a170b30415a5a47b8da368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8241eb2be50670ad75e6b1370d56d2947742b4f98a170b30415a5a47b8da368->enter($__internal_f8241eb2be50670ad75e6b1370d56d2947742b4f98a170b30415a5a47b8da368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c7050158702e6439ff5f3d71866f1ccbcf94c66191c237ec715abab4dbdce54a->leave($__internal_c7050158702e6439ff5f3d71866f1ccbcf94c66191c237ec715abab4dbdce54a_prof);

        
        $__internal_f8241eb2be50670ad75e6b1370d56d2947742b4f98a170b30415a5a47b8da368->leave($__internal_f8241eb2be50670ad75e6b1370d56d2947742b4f98a170b30415a5a47b8da368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
