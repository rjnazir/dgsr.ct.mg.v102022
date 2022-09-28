<?php

/* @Admin/CtMotif/add.html.twig */
class __TwigTemplate_3c231907eefca41b82e91f38860e8dc6e3d7a05ad59670c3112ade8039884cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotif/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7bc915cd885d29dfbb4fb620c1e58eafa7c971025bc0754e2ec1c4f1acb4fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7bc915cd885d29dfbb4fb620c1e58eafa7c971025bc0754e2ec1c4f1acb4fdf->enter($__internal_f7bc915cd885d29dfbb4fb620c1e58eafa7c971025bc0754e2ec1c4f1acb4fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/add.html.twig"));

        $__internal_cb70d94bbf94f81579bc997c3d68837aa812d12bee8399ed79f8c010d9f7dd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb70d94bbf94f81579bc997c3d68837aa812d12bee8399ed79f8c010d9f7dd4d->enter($__internal_cb70d94bbf94f81579bc997c3d68837aa812d12bee8399ed79f8c010d9f7dd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_type"] = true;
        // line 9
        $context["menu_motif_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7bc915cd885d29dfbb4fb620c1e58eafa7c971025bc0754e2ec1c4f1acb4fdf->leave($__internal_f7bc915cd885d29dfbb4fb620c1e58eafa7c971025bc0754e2ec1c4f1acb4fdf_prof);

        
        $__internal_cb70d94bbf94f81579bc997c3d68837aa812d12bee8399ed79f8c010d9f7dd4d->leave($__internal_cb70d94bbf94f81579bc997c3d68837aa812d12bee8399ed79f8c010d9f7dd4d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e685f7908591271d5f775af2b6fe9fb145675d1674f505828ca60f0785c4489d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e685f7908591271d5f775af2b6fe9fb145675d1674f505828ca60f0785c4489d->enter($__internal_e685f7908591271d5f775af2b6fe9fb145675d1674f505828ca60f0785c4489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ca941f5d70121a07234150da05e71cc18030a1884e9952c2dac3d7eb8580cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca941f5d70121a07234150da05e71cc18030a1884e9952c2dac3d7eb8580cee->enter($__internal_8ca941f5d70121a07234150da05e71cc18030a1884e9952c2dac3d7eb8580cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_8ca941f5d70121a07234150da05e71cc18030a1884e9952c2dac3d7eb8580cee->leave($__internal_8ca941f5d70121a07234150da05e71cc18030a1884e9952c2dac3d7eb8580cee_prof);

        
        $__internal_e685f7908591271d5f775af2b6fe9fb145675d1674f505828ca60f0785c4489d->leave($__internal_e685f7908591271d5f775af2b6fe9fb145675d1674f505828ca60f0785c4489d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc43a5d75822b5f1d465b3285a2db93efd81bb0e239ecc62941246bd4bcb933f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc43a5d75822b5f1d465b3285a2db93efd81bb0e239ecc62941246bd4bcb933f->enter($__internal_cc43a5d75822b5f1d465b3285a2db93efd81bb0e239ecc62941246bd4bcb933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eef2eef5033eb7d0d628b3a82f128bdc0d5a988e16acc10e13372a2ebcc8dd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef2eef5033eb7d0d628b3a82f128bdc0d5a988e16acc10e13372a2ebcc8dd79->enter($__internal_eef2eef5033eb7d0d628b3a82f128bdc0d5a988e16acc10e13372a2ebcc8dd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_eef2eef5033eb7d0d628b3a82f128bdc0d5a988e16acc10e13372a2ebcc8dd79->leave($__internal_eef2eef5033eb7d0d628b3a82f128bdc0d5a988e16acc10e13372a2ebcc8dd79_prof);

        
        $__internal_cc43a5d75822b5f1d465b3285a2db93efd81bb0e239ecc62941246bd4bcb933f->leave($__internal_cc43a5d75822b5f1d465b3285a2db93efd81bb0e239ecc62941246bd4bcb933f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotif/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_motif           = true %}
{% set menu_motif_type      = true %}
{% set menu_motif_type_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.mtfLibelle) }}
                        {{ form_row(form.mtfIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMotif/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotif\\add.html.twig");
    }
}
