<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e31f2edc89fcf027520a5a8cf4cb8a2d5a4fd30463cb9ce3514728dae003b41 extends Twig_Template
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
        $__internal_82bb9c9aba5c72e62ce2ee32dfe7cf34b836a3cc6ed006bd23925da1f159adbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bb9c9aba5c72e62ce2ee32dfe7cf34b836a3cc6ed006bd23925da1f159adbb->enter($__internal_82bb9c9aba5c72e62ce2ee32dfe7cf34b836a3cc6ed006bd23925da1f159adbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0e2fe7734aa4404c3637ae8b8f41e24b2d345e7959d191adee87df6150afde46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2fe7734aa4404c3637ae8b8f41e24b2d345e7959d191adee87df6150afde46->enter($__internal_0e2fe7734aa4404c3637ae8b8f41e24b2d345e7959d191adee87df6150afde46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_82bb9c9aba5c72e62ce2ee32dfe7cf34b836a3cc6ed006bd23925da1f159adbb->leave($__internal_82bb9c9aba5c72e62ce2ee32dfe7cf34b836a3cc6ed006bd23925da1f159adbb_prof);

        
        $__internal_0e2fe7734aa4404c3637ae8b8f41e24b2d345e7959d191adee87df6150afde46->leave($__internal_0e2fe7734aa4404c3637ae8b8f41e24b2d345e7959d191adee87df6150afde46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
