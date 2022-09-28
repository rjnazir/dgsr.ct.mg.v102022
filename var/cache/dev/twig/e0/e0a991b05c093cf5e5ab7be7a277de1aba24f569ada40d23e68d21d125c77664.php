<?php

/* :email:layoutEmail.email.twig */
class __TwigTemplate_673a318c54b4bc4f7a47271af312b1b1771a26446c452e2a6f585dfd3402f085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
            'body_html_content' => array($this, 'block_body_html_content'),
            'body_html_footer_action' => array($this, 'block_body_html_footer_action'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_583cdf211569e766882dcbba04212db45b3f94cbb0c51ec593ded25ee62263cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583cdf211569e766882dcbba04212db45b3f94cbb0c51ec593ded25ee62263cf->enter($__internal_583cdf211569e766882dcbba04212db45b3f94cbb0c51ec593ded25ee62263cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:layoutEmail.email.twig"));

        $__internal_ef907fb3eb1da016ce461c2f54e096730fb3af937f712a33305985a88c4f0e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef907fb3eb1da016ce461c2f54e096730fb3af937f712a33305985a88c4f0e3c->enter($__internal_ef907fb3eb1da016ce461c2f54e096730fb3af937f712a33305985a88c4f0e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:layoutEmail.email.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_583cdf211569e766882dcbba04212db45b3f94cbb0c51ec593ded25ee62263cf->leave($__internal_583cdf211569e766882dcbba04212db45b3f94cbb0c51ec593ded25ee62263cf_prof);

        
        $__internal_ef907fb3eb1da016ce461c2f54e096730fb3af937f712a33305985a88c4f0e3c->leave($__internal_ef907fb3eb1da016ce461c2f54e096730fb3af937f712a33305985a88c4f0e3c_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5ac3333216bd0fc7d789e509e30545023399a4910070bd66ab8e2437e8d20e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac3333216bd0fc7d789e509e30545023399a4910070bd66ab8e2437e8d20e49->enter($__internal_5ac3333216bd0fc7d789e509e30545023399a4910070bd66ab8e2437e8d20e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_bcd588767b583aabd0bfdd45d7d27adea6dabc615bd8edeadcee8dd7fdb87c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd588767b583aabd0bfdd45d7d27adea6dabc615bd8edeadcee8dd7fdb87c08->enter($__internal_bcd588767b583aabd0bfdd45d7d27adea6dabc615bd8edeadcee8dd7fdb87c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        
        $__internal_bcd588767b583aabd0bfdd45d7d27adea6dabc615bd8edeadcee8dd7fdb87c08->leave($__internal_bcd588767b583aabd0bfdd45d7d27adea6dabc615bd8edeadcee8dd7fdb87c08_prof);

        
        $__internal_5ac3333216bd0fc7d789e509e30545023399a4910070bd66ab8e2437e8d20e49->leave($__internal_5ac3333216bd0fc7d789e509e30545023399a4910070bd66ab8e2437e8d20e49_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9fb29690f3864bed1a70e86864688d01f9717cbd857ba1f5e04cc79b83625fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb29690f3864bed1a70e86864688d01f9717cbd857ba1f5e04cc79b83625fe0->enter($__internal_9fb29690f3864bed1a70e86864688d01f9717cbd857ba1f5e04cc79b83625fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a9663936dee6fada1f03936f7d13372d127dc26717cbde813f73fcf2efde2023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9663936dee6fada1f03936f7d13372d127dc26717cbde813f73fcf2efde2023->enter($__internal_a9663936dee6fada1f03936f7d13372d127dc26717cbde813f73fcf2efde2023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        
        $__internal_a9663936dee6fada1f03936f7d13372d127dc26717cbde813f73fcf2efde2023->leave($__internal_a9663936dee6fada1f03936f7d13372d127dc26717cbde813f73fcf2efde2023_prof);

        
        $__internal_9fb29690f3864bed1a70e86864688d01f9717cbd857ba1f5e04cc79b83625fe0->leave($__internal_9fb29690f3864bed1a70e86864688d01f9717cbd857ba1f5e04cc79b83625fe0_prof);

    }

    // line 5
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d23ec513a6a82e4739a415066772aa23fa1a3afaf71068deec658d2b425401b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23ec513a6a82e4739a415066772aa23fa1a3afaf71068deec658d2b425401b4->enter($__internal_d23ec513a6a82e4739a415066772aa23fa1a3afaf71068deec658d2b425401b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f099afcd88dd0a38005e7dae04a09edf6cbc256866ca2102b589d2dc091f0bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f099afcd88dd0a38005e7dae04a09edf6cbc256866ca2102b589d2dc091f0bfe->enter($__internal_f099afcd88dd0a38005e7dae04a09edf6cbc256866ca2102b589d2dc091f0bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 6
        echo "    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>

        <body style=\"margin:0;\">
            <table width=\"620\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
                <tbody>
                    <tr>
                        ";
        // line 15
        $this->displayBlock('body_html_content', $context, $blocks);
        // line 16
        echo "                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            ";
        // line 19
        $this->displayBlock('body_html_footer_action', $context, $blocks);
        // line 20
        echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
";
        
        $__internal_f099afcd88dd0a38005e7dae04a09edf6cbc256866ca2102b589d2dc091f0bfe->leave($__internal_f099afcd88dd0a38005e7dae04a09edf6cbc256866ca2102b589d2dc091f0bfe_prof);

        
        $__internal_d23ec513a6a82e4739a415066772aa23fa1a3afaf71068deec658d2b425401b4->leave($__internal_d23ec513a6a82e4739a415066772aa23fa1a3afaf71068deec658d2b425401b4_prof);

    }

    // line 15
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_8a1cb9aa4ff50d0954f2c8d78b9515e4852adc29af4fa005d6eb5eb02a2f7246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1cb9aa4ff50d0954f2c8d78b9515e4852adc29af4fa005d6eb5eb02a2f7246->enter($__internal_8a1cb9aa4ff50d0954f2c8d78b9515e4852adc29af4fa005d6eb5eb02a2f7246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_ef44847c35aeee8708e3929014351d501cc2d80fbd17bb5bcd6a1bfc6783b6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef44847c35aeee8708e3929014351d501cc2d80fbd17bb5bcd6a1bfc6783b6c0->enter($__internal_ef44847c35aeee8708e3929014351d501cc2d80fbd17bb5bcd6a1bfc6783b6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        
        $__internal_ef44847c35aeee8708e3929014351d501cc2d80fbd17bb5bcd6a1bfc6783b6c0->leave($__internal_ef44847c35aeee8708e3929014351d501cc2d80fbd17bb5bcd6a1bfc6783b6c0_prof);

        
        $__internal_8a1cb9aa4ff50d0954f2c8d78b9515e4852adc29af4fa005d6eb5eb02a2f7246->leave($__internal_8a1cb9aa4ff50d0954f2c8d78b9515e4852adc29af4fa005d6eb5eb02a2f7246_prof);

    }

    // line 19
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_295102495fa2222095bcf17a1d9c1b1014836f3a09264d62eeb1bf15e2185f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295102495fa2222095bcf17a1d9c1b1014836f3a09264d62eeb1bf15e2185f51->enter($__internal_295102495fa2222095bcf17a1d9c1b1014836f3a09264d62eeb1bf15e2185f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_36dfa1c15c4122c0ae4d768ac1c509fbb127effdf99d16d25530d26b8416314b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dfa1c15c4122c0ae4d768ac1c509fbb127effdf99d16d25530d26b8416314b->enter($__internal_36dfa1c15c4122c0ae4d768ac1c509fbb127effdf99d16d25530d26b8416314b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_36dfa1c15c4122c0ae4d768ac1c509fbb127effdf99d16d25530d26b8416314b->leave($__internal_36dfa1c15c4122c0ae4d768ac1c509fbb127effdf99d16d25530d26b8416314b_prof);

        
        $__internal_295102495fa2222095bcf17a1d9c1b1014836f3a09264d62eeb1bf15e2185f51->leave($__internal_295102495fa2222095bcf17a1d9c1b1014836f3a09264d62eeb1bf15e2185f51_prof);

    }

    public function getTemplateName()
    {
        return ":email:layoutEmail.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 19,  129 => 15,  113 => 20,  111 => 19,  106 => 16,  104 => 15,  93 => 6,  84 => 5,  67 => 3,  50 => 1,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}{% endblock %}

{% block body_text %}{% endblock %}

{% block body_html %}
    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>

        <body style=\"margin:0;\">
            <table width=\"620\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
                <tbody>
                    <tr>
                        {% block body_html_content %}{% endblock %}
                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            {% block body_html_footer_action %}{% endblock %}
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
{% endblock %}", ":email:layoutEmail.email.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/email/layoutEmail.email.twig");
    }
}
